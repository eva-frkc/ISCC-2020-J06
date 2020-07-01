<?php
$compteur=0;
$maximum=100;

function compter_dizaine($maximum){
    while ($compteur<$maximum){
        $compteur = $compteur + 1;
        echo "$compteur<br>";

        if(!($compteur%100)){
            echo "Ceci est une centaine.<br>";
        }
        elseif(!($compteur%10)){
            echo "Ceci est une dizaine.<br>";
        }
    }
}

compter_dizaine($maximum);

?>