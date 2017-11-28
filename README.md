Kode pada repository ini merupakan contoh kode yang digunakan pada protokol MQTT;
Client = Publisher;
Server = Subscriber;
Cara compile client (pada beaglebone): gcc mqtt_client.c -o pub -lpaho-mqtt3c;
                                       ./pub;
Cara compile server (pada ubuntu): gcc mqtt_server.c -o sub -lpaho-mqtt3c -lmysqlclient;
                                   ./sub;
