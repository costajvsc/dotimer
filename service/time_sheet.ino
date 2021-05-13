#include <SPI.h>
#include <Ethernet.h>
#include <MFRC522.h>

byte mac[]  = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = {192, 168, 18, 203};
byte gateway[] = {192, 168, 18, 1};
byte subnet[] = {225, 225, 225, 0};

byte server[] = {192, 168, 18, 4};

#define HTTP_port 80
#define SS_PIN 10
#define RST_PIN 9
EthernetClient client;
MFRC522 rfid(SS_PIN, RST_PIN);    

void setup()
{
  Serial.begin(9600);
  Ethernet.begin(mac, ip, gateway, subnet);
  SPI.begin();
  rfid.PCD_Init();

  Serial.println("Approximate your card to the reader...");

  if(!Ethernet.begin(mac))
    Serial.println('Failed connect to network');
    
  Serial.print('Connect to network on IP: ');
  Serial.println(Ethernet.localIP());
}

void loop()
{
  String id_card = "";
  String uri = "";

  if(!rfid.PICC_IsNewCardPresent())
    return;
  if(!rfid.PICC_ReadCardSerial())
    return;

  for (byte i = 0; i < rfid.uid.size; i++){
      id_card.concat(String(rfid.uid.uidByte[i] < 0x10 ? "0" : ""));
      id_card.concat(String(rfid.uid.uidByte[i], HEX));
  }      
  
  uri = "dotimer/service/register.php?id_card=" + id_card;
  
  Serial.println("ID: " + id_card);
  Serial.println("URL: " + uri);

  if(client.connect(server, 80))
    sendRequest(server, uri);
}

void sendRequest(const char* host, String uri){
  Serial.print("GET ");
  Serial.println(uri);

  client.print("GET ");
  client.print(uri);
  client.println(" HTTP/1.1");
  client.print("Host: ");
  client.println(host);
  client.println("Connection: close");
  client.println();
}