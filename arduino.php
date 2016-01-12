<?php

if(isset($_POST['cor'])){

    // onde é especificado o USB que está em uso pelo Arduíno
    // essa informação pode ser pega na IDE do Arduino, indo em "Tools->Serial Port"
    $usb = "/dev/ttyACM0";
    
    $port = fopen($usb, "w");
        switch($_POST['cor']){
            case "azul":
                fwrite($port, "b");
                break;
            case "amarelo":
                fwrite($port, "y");
                break;
            case "verde":
                fwrite($port, "g");
                break;
            case "vermelho":
                fwrite($port, "r");
                break;
        }
    fclose($port);
}
?>