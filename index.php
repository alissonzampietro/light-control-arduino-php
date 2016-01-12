<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/botoes.css" />
        <script src="bower_components/jquery/dist/jquery.min.js" ></script>
        <title>Controle de Leds com Arduino</title>
        <script>
            $(document).ready(function(){
                $(".onoffswitch-checkbox").click(function(){
                    valor = $(this).attr("data-id");
                    $.post("arduino.php",{"cor":valor});
                })
            })
        </script>
    </head>
    <body>
        <section class="main">
            <?php 
                $ativo = 0;
                if(@fopen('/dev/ttyACM0', "w")!=FALSE){
                    $ativo = 1;
                    $titulo = "Painel de controle de Luz";
                }else{
                    $titulo = "Não identificamos seu arduíno";
                }
            ?>
            <h1><?php echo $titulo ?></h1>
            <?php if($ativo!=0){ ?>
            <div class="luz">
                <p class="title vermelho">Vermelho</p>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" data-id="vermelho" id="myonoffswitch">
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div> 
            </div>
            
            <div class="luz">
                <p class="title amarelo">Amarelo</p>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" data-id="amarelo" id="myonoffswitch1">
                    <label class="onoffswitch-label" for="myonoffswitch1">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>    
            </div>
            
            <div class="luz">
                <p class="title azul">Azul</p>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" data-id="azul" id="myonoffswitch2">
                    <label class="onoffswitch-label" for="myonoffswitch2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>

            <div class="luz">
                <p class="title verde">Verde</p>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" data-id="verde" id="myonoffswitch3">
                    <label class="onoffswitch-label" for="myonoffswitch3">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
            </div>
        <?php } ?>
        </section>
       
    </body>
</html>