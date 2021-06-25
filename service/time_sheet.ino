#include <SPI.h>
#include <Ethernet.h>
#include <MFRC522.h>
byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED};
byte ip[] = {192, 168, 18, 203};
byte gateway[] = {192, 168, 18, 1};
byte subnet[] = {255, 255, 255, 0};

const char* server = "192.168.18.4";

#define HTTP_port 80
#define SS_PIN_TIMESHEET 3
#define SS_PIN_DOORLOCK 4
#define RST_PIN 9
EthernetClient client;
MFRC522 rfid_timesheet(SS_PIN_TIMESHEET, RST_PIN);
MFRC522 rfid_doorlock(SS_PIN_DOORLOCK, RST_PIN);

void setup()
{
  Serial.begin(9600);
  Ethernet.begin(mac, ip, gateway, subnet);
  SPI.begin();
  rfid_timesheet.PCD_Init();
  rfid_doorlock.PCD_Init();

  Serial.println("Approximate your card to the reader...");

  if(!Ethernet.begin(mac))
    Serial.println("Failed connect to network");
    
  Serial.print("Connect to network on IP: ");
  Serial.println(Ethernet.localIP());
}

void loop()
{
  String id_card = "";
  String uri = "";
  
  if(rfid_timesheet.PICC_IsNewCardPresent() && rfid_timesheet.PICC_ReadCardSerial())
  {
    for (byte i = 0; i < rfid_timesheet.uid.size; i++){
      id_card.concat(String(rfid_timesheet.uid.uidByte[i] < 0x10 ? "0" : ""));
      id_card.concat(String(rfid_timesheet.uid.uidByte[i], HEX));
    }      
    
    delay(1000);
    uri = "/dotimer/service/register.php?id_card=" + id_card;
    Serial.println(client.connect(server, 80) ? "Connected" : "Connection Failed!");
  
    if(client.connect(server, 80))
      sendRequest(server, uri); 

    return;
  }

  if(rfid_doorlock.PICC_IsNewCardPresent() && rfid_doorlock.PICC_ReadCardSerial())
  {
    for (byte i = 0; i < rfid_doorlock.uid.size; i++){
      id_card.concat(String(rfid_doorlock.uid.uidByte[i] < 0x10 ? "0" : ""));
      id_card.concat(String(rfid_doorlock.uid.uidByte[i], HEX));
    }      
    
    delay(1000);
    uri = "/dotimer/service/guard.php?id_door=7&card_id=" + id_card;
    Serial.println(client.connect(server, 80) ? "Connected" : "Connection Failed!");
  
    if(client.connect(server, 80))
      sendRequest(server, uri); 

    return;
  }
}

void sendRequest(const char* host, String uri){
  Serial.print("GET ");
  Serial.println(server + uri);
  
  client.print("GET ");
  client.print(uri);
  client.println(" HTTP/1.1");
  client.print("Host: ");
  client.println(host);

  //String response = "";
  //while (client.available()) {
    //char* c = client.read();
    //response += c; 
  //}
  
  //Serial.println("Response: " + response);

  client.println("Connection: close");
  client.println();
}