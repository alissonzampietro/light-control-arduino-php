int ledPin13 =  13;
int ledPin11 =  11;
int ledPin9  =  9;
int ledPin7  =  7;
 
void setup()   {
 
  Serial.begin(9600);
 
  pinMode(ledPin13, OUTPUT);
  pinMode(ledPin11, OUTPUT);
  pinMode(ledPin9, OUTPUT);
  pinMode(ledPin7, OUTPUT);
 
}
 
void loop()
{
  char caracter;
  caracter = Serial.read();
  //se pressionado "v" liga o led verde
  if(caracter == 'v')
  {
      digitalWrite(ledPin13, HIGH);
  }
  else
    //Se pressionado "z" liga o led azul
    if(caracter == 'z')
    {
         digitalWrite(ledPin11, HIGH);
    }
    else
      //S pressionado "l" liga o led laranja
      if(caracter == 'l')
      {
         digitalWrite(ledPin9, HIGH);
      }
      else
        //Se pressionado "a" liga o led amarelo
        if(caracter == 'a')
        {
            digitalWrite(ledPin7, HIGH);
        }
 
  delay(1000);
}
