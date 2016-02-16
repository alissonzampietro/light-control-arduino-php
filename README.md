#Controlador remoto de LEDS utilizando PHP, AJAX e Arduino 

![Demo](https://raw.githubusercontent.com/alissonzampietro/arduino_php/master/assets/imagens/layout.jpg)

## Descrição

Simples controlador remoto utilizando [Arduíno](https://www.arduino.cc/) com [PHP](https://php.net).

## Requisitos para o desenvolvimento

#Recursos virtuais
* Servidor Apache
* [git](https://git-scm.com/)
* [Bower](http://bower.io/)
* [PHP](http://php.net)
* [Arduíno IDE](https://www.arduino.cc/) 
Para quem estiver usando Windows, pode baixar o [WAMP](http://www.baixaki.com.br/download/wamp5.htm) ou o [XAMMP](http://www.baixaki.com.br/download/xampp.htm)

#Recursos físicos
* [Placa Arduíno](http://lista.mercadolivre.com.br/arduino#D[A:arduino])
* [Jumpers](http://lista.mercadolivre.com.br/jumpers#D[A:jumpers])
* LEDs
* [Protoboard](http://eletronicos.mercadolivre.com.br/pecas-componentes-eletricos/protoboard)
Ou pode comprar os componentes separados, ou se optar, compre o [Kit Arduino](http://lista.mercadolivre.com.br/kit-arduino#D[A:kit-arduino]) que vem com a placa e os componentes necessários.

##Utilizando

Clone o projeto dentro da pasta www que foi criada na instalação do apache.

`git clone https://github.com/alissonzampietro/arduino_php.git`

Instale as dependências do projeto com o seguinte comando:

`bower install`

Agora você deve dar permissão para que o método fopen tenha permissão para acessar o caminho USB onde está comentado.


