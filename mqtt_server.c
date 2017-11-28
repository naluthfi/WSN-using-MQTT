/*Big Thanks To : Eclipse Org. and IBM for the reference, (Build at 2 - 10 - 2017 )*/
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <MQTTClient.h>
#include <mysql/mysql.h>

/*Broker Setup, using mosquitto in this projects*/
#define ADDRESS     "tcp://localhost:1883"
#define CLIENTID    "ExampleClientSub"
#define TOPIC       "Usound"
#define QOS         1
#define TIMEOUT     10000L

volatile MQTTClient_deliveryToken deliveredtoken;

void delivered(void *context, MQTTClient_deliveryToken dt)
{
    deliveredtoken = dt;
}

int msgarrvd(void *context, char *topicName, int topicLen, MQTTClient_message *message)
{
      int i;
      char* payloadptr;
      char msg[100]={0};
      MYSQL *conn;
      MYSQL_RES *res;
      MYSQL_ROW row;
      char sensorvalue[100];
      char *server = "127.0.0.1";
      char *user = "root";
      //set the password for mysql server here
      char *password = ""; /* set me first */
      char *database = "wsn";
      conn = mysql_init(NULL);
      float value;
     
    printf("From Broker, Topic(%s)\n",topicName);
    
    // Receiving Data
    payloadptr = message->payload;
    for(i=0; i<message->payloadlen; i++)
    {
        msg[i]=(*payloadptr++);

    }
 
    /*This section to be continued for inserting into database table :)*/
    printf("Sensor Value : %s\n",msg);
    /* Connect to database */
      if (!mysql_real_connect(conn, server,
            user, password, database, 0, NULL, 0)) {
          fprintf(stderr, "%s\n", mysql_error(conn));
          exit(1);
      }
     value = atof(msg);
     sprintf(sensorvalue,"INSERT INTO data(date,jarak) VALUES (CURRENT_TIMESTAMP,%0.2f)",value);
     /* send SQL query */
      if (mysql_query(conn, sensorvalue) == 0) {
          printf("New record created successfully\n");
      }
      else{
	  fprintf(stderr,"%s\n",mysql_error(conn));
	  exit(1);
	}	
   
    mysql_close(conn);
    printf("\n");
    
    MQTTClient_freeMessage(&message);
    MQTTClient_free(topicName);
    return 1;
}

void connlost(void *context, char *cause)
{
    printf("\nConnection lost\n");
    printf("     cause: %s\n", cause);
}

int main(int argc, char* argv[])
{
    MQTTClient client;
    MQTTClient_connectOptions conn_opts = MQTTClient_connectOptions_initializer;
    int rc;
    int ch;

    MQTTClient_create(&client, ADDRESS, CLIENTID,
        MQTTCLIENT_PERSISTENCE_NONE, NULL);
    conn_opts.keepAliveInterval = 20;
    conn_opts.cleansession = 1;

    MQTTClient_setCallbacks(client, NULL, connlost, msgarrvd, delivered); // Listning Data.

    if ((rc = MQTTClient_connect(client, &conn_opts)) != MQTTCLIENT_SUCCESS)
    {
        printf("Failed to connect, return code %d\n", rc);
        exit(EXIT_FAILURE);
    }
    printf("Subscribing to topic %s\nfor client %s using QoS%d\n\n"
           "Press Q<Enter> to quit\n\n", TOPIC, CLIENTID, QOS);
    MQTTClient_subscribe(client, TOPIC, QOS);

    do 
    {
        ch = getchar();
    } while(ch!='Q' && ch != 'q');

    MQTTClient_unsubscribe(client, TOPIC);
    MQTTClient_disconnect(client, 10000);
    MQTTClient_destroy(&client);
    return rc;
}
