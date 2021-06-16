<?php
$Miss = "Missing guess parameter";
$High = "Your guess is too high";
$Non = "Your guess is not a number";
$Low = "Your guess is too low";
$Cor = "Congratulations - You are right";
$g =  $_GET["guess"] ?? null;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mukhit Nassyrov</title>
    </head>

    <body>
        <h1>Welcome to my guessing game</h1>
        <?php
      
            if(null === $g){
                    echo $Miss;
                }
            elseif($g == ""){
                echo "Your guess is too short";
                }
            elseif(!is_numeric($g)){
                echo $Non;
            }
            elseif( $g > 62 ){
                echo $High;
            }
            elseif($g < 62){
                echo $Low;
            }
            elseif($g == 62){
                echo $Cor;
            }
        
        ?>


    </body>


</html>