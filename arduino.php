<?php

if(isset($_POST['cor'])){
    $port = fopen("/dev/ttyACM0", "w");
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