int azul     =  7,flagAzul = 0;
int amarelo  =  8,flagAmarelo = 0;
int verde    =  9,flagVerde = 0;
int vermelho =  10,flagVermelho = 0;
 
void setup()   {
 
  Serial.begin(9600);
 
  pinMode(azul, OUTPUT);
  pinMode(amarelo, OUTPUT);
  pinMode(verde, OUTPUT);
  pinMode(vermelho, OUTPUT);
 
}
 
void loop()
{
  char caracter;
  caracter = Serial.read();
  Serial.println(caracter);

  switch(caracter){
     case 'b':
       if(flagAzul == 0){
         digitalWrite(azul,HIGH);
         flagAzul = 1;
       }else{
         digitalWrite(azul,LOW);
         flagAzul = 0;
       }
     break;
     case 'y':
       if(flagAmarelo == 0){
         digitalWrite(amarelo,HIGH);
         flagAmarelo = 1;
       }else{
         digitalWrite(amarelo,LOW);
         flagAmarelo = 0;
       }
     break;
     case 'g':
       if(flagVerde == 0){
         digitalWrite(verde,HIGH);
         flagVerde = 1;
       }else{
         digitalWrite(verde,LOW);
         flagVerde = 0;
       }
     break;
     case 'r':
       if(flagVermelho == 0){
         digitalWrite(vermelho,HIGH);
         flagVermelho = 1;
       }else{
         digitalWrite(vermelho,LOW);
         flagVermelho = 0;
       }
     break;
  }
  delay(100);
}
