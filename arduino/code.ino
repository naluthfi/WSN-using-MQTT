int triger= 11;           
int echo= 12;            
double durasi, jarak;     
void setup() {
  pinMode(triger,OUTPUT);
  pinMode(echo,INPUT);
  Serial.begin(9600);

}

void loop() {
  // put your main code here, to run repeatedly:
  digitalWrite(triger, LOW);
  digitalWrite(triger, HIGH);
  digitalWrite(triger, LOW);

  durasi= pulseIn(echo, HIGH);  
  
  jarak= durasi*0.034/2;
//  Serial.print("Durasi : "); 
 // Serial.print(durasi/1000);
//  Serial.println(" miliSecond \n");
  //Serial.print("Jarak : ");
  Serial.println(jarak);       
  //Serial.println(" Centi Meter \n");
  delay(6000);
}

