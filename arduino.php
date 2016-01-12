<?php
 
$port = fopen("/dev/ttyUSB0", "w");
if ($_POST['estado']=="Amarelo")
{
    echo "Ligou o Amarelo";
    fwrite($port, "a");
}
    if ($_POST['estado']=="Azul")
    {
        echo "Ligou o Azul";
        fwrite($port, "z");
    }
        if ($_POST['estado']=="Laranja")
        {
            echo "Ligou o Laranja";
            fwrite($port, "l");
        }
            if ($_POST['estado']=="Verde")
            {
                echo "Ligou o Verde";
                fwrite($port, "v");
            }
fclose($port);
?>