//humidity and temp sensor
#include <dht.h>
#include <ESP8266WiFi.h>
#include <FirebaseArduino.h>


// WIFI
#define FIREBASE_HOST "apwis-4cd3b-default-rtdb.firebaseio.com"
#define FIREBASE_AUTH "jq4DCw1TdJHR5jJTiq4yUmpXKMirs9LX1mSI0dvv"
#define WIFI_SSID "Dialog 4G Dilan"
#define WIFI_PASSWORD "Dilan1999"

dht DHT;
int temp = 0;
int humi = 0;
int mois = 0;
#define DHT11_PIN 7
int sensor_pin = A1;

int Wlevel = 0;
int Flevel = 0;
//soil moisture sensor
int output_value ;

//water level sensor
#define sensorPower2 10
#define sensorPin2 A3
#define sensorPower1 9
#define sensorPin1 A2



// Value for storing water level
int val2 = 0;
int val = 0;


//motor controller 
int motor1pin1 = 2;
int motor1pin2 = 3;

int motor2pin1 = 4;
int motor2pin2 = 5;

/* I2C LCD */
#include <Wire.h> // Library for I2C communication
#include <LiquidCrystal_I2C.h> // Library for LCD
//SDA pin is connected to A4 and SCL pin to A5.
//Connect to LCD via I2C, default address 0x27 (A0-A2 not jumpered)
LiquidCrystal_I2C lcd = LiquidCrystal_I2C(0x27, 16, 2); // Change to (0x27,20,4) for 20x4 LCD.

void setup() {
  // Initiate the LCD:
  lcd.init();
  lcd.backlight();
  // Water level
  pinMode(sensorPower1, OUTPUT);
  digitalWrite(sensorPower1, LOW);

  pinMode(sensorPower2, OUTPUT);
  digitalWrite(sensorPower2, LOW);
  
  Serial.begin(9600);
  // put your setup code here, to run once:
  pinMode(motor1pin1, OUTPUT);
  pinMode(motor1pin2, OUTPUT);
  pinMode(motor2pin1, OUTPUT);
  pinMode(motor2pin2, OUTPUT);
}

void loop() {
  
  //WATER LEVEL SENSOR
  Wlevel = readSensor1();
  Serial.print("Water level: ");
  Serial.println(Wlevel);

  Flevel = readSensor2();
  
  Serial.print("fertilizer level: ");
  Serial.println(Flevel);

  //SOIL MOISTURE SENSOR

  output_value= analogRead(sensor_pin);

   output_value = map(output_value,550,0,0,100);

   Serial.print("Mositure : ");
   mois = output_value + 20;
   Serial.print(mois);
   
   Serial.println("%");

  //HUMIDITY AND TEMP SENSOR
  temp = 0;
  humi = 0;
  int chk = DHT.read11(DHT11_PIN);
  temp = DHT.temperature +10;
  humi = DHT.humidity;
  Serial.print("Temperature = ");
  Serial.println(DHT.temperature);
  Serial.print("Humidity = ");
  Serial.println(DHT.humidity);
  
  delay(5000);

  //MOTOR CONTROLLER
  
  // put your main code here, to run repeatedly:   
  //digitalWrite(motor1pin1, HIGH);
  //digitalWrite(motor1pin2, LOW);

  //digitalWrite(motor2pin1, LOW);
  //digitalWrite(motor2pin2, HIGH);
  //delay(1000);

  //digitalWrite(motor1pin1, LOW);
  //digitalWrite(motor1pin2, HIGH);

  //digitalWrite(motor2pin1, LOW);
  //digitalWrite(motor2pin2, HIGH);
  //delay(1000);
    // Print 'Hello World!' on the first line of the LCD:
  displaydata();
  
  

}

//This is a function used to get the reading of water level sensor 
  int readSensor1() {
  digitalWrite(sensorPower1, HIGH);  // Turn the sensor ON
  delay(10);              // wait 10 milliseconds
  val = analogRead(sensorPin1);    // Read the analog value form sensor
  digitalWrite(sensorPower1, LOW);   // Turn the sensor OFF
  return val;             // send current reading
}

  int readSensor2() {
  digitalWrite(sensorPower2, HIGH);  // Turn the sensor ON
  delay(10);              // wait 10 milliseconds
  val = analogRead(sensorPin2);    // Read the analog value form sensor
  digitalWrite(sensorPower2, LOW);   // Turn the sensor OFF
  return val;             // send current reading
}

 int displaydata(){
   lcd.clear();
   lcd.setCursor(2, 0); // Set the cursor on the third column and first row.
  lcd.print("temp - ");
  lcd.print(temp); // Print the string "Hello World!"
  lcd.setCursor(2, 1); //Set the cursor on the third column and the second row (counting starts at 0!).
  lcd.print("humi - ");
  lcd.print(humi);
  delay(3000);
  lcd.clear();
  lcd.setCursor(2, 0); // Set the cursor on the third column and first row.
  lcd.print("mois - ");
  lcd.print(mois); 
  delay(3000);
  lcd.clear();
  lcd.setCursor(2, 0);//Set the cursor on the third column and the second row (counting starts at 0!)
  if (Wlevel > 500){
    lcd.print("W-Level full");
  }else if(Wlevel>=300 && Wlevel<= 500){
    lcd.print("W-Level medium");
  }else if(Wlevel <300){
    lcd.print("W-Level Low");
  }
  
  lcd.setCursor(2, 1); // Set the cursor on the third column and first row.
   if (Flevel > 500){
    lcd.print("F-Level full");
  }else if(Flevel>=300 && Flevel<= 500){
    lcd.print("F-Level medium");
  }else if(Flevel <=300){
    lcd.print("F-level Low");
  }
  }

//Wifi Module
//remove the gpio - 0 from the ground after inistiation.



void setup() {
  Serial.begin(9600);

  // connect to wifi.
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.print("connected: ");
  Serial.println(WiFi.localIP());
  
  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
}

int n = 0;

void loop() {
  // set value
  Firebase.setFloat("number", 42.0);
  // handle error
  if (Firebase.failed()) {
      Serial.print("setting /number failed:");
      Serial.println(Firebase.error());  
      return;
  }
  delay(1000);
  
  // update value
  Firebase.setFloat("number", 43.0);
  // handle error
  if (Firebase.failed()) {
      Serial.print("setting /number failed:");
      Serial.println(Firebase.error());  
      return;
  }
  delay(1000);

  // get value 
  Serial.print("number: ");
  Serial.println(Firebase.getFloat("number"));
  delay(1000);

  // remove value
  Firebase.remove("number");
  delay(1000);

  // set string value
  Firebase.setString("message", "hello world");
  // handle error
  if (Firebase.failed()) {
      Serial.print("setting /message failed:");
      Serial.println(Firebase.error());  
      return;
  }
  delay(1000);
  
  // set bool value
  Firebase.setBool("truth", false);
  // handle error
  if (Firebase.failed()) {
      Serial.print("setting /truth failed:");
      Serial.println(Firebase.error());  
      return;
  }
  delay(1000);

  // append a new value to /logs
  String name = Firebase.pushInt("logs", n++);
  // handle error
  if (Firebase.failed()) {
      Serial.print("pushing /logs failed:");
      Serial.println(Firebase.error());  
      return;
  }
  Serial.print("pushed: /logs/");
  Serial.println(name);
  delay(1000);
}














  
