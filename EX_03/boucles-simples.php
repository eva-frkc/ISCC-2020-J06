<?php
$compteur = 0;
$maximum= 10 ;

function compter($maximum){
    while ($compteur<$maximum){
        $compteur = $compteur + 1;
        echo "$compteur<br>";
    }
}

function compter_for($maximum){
    for ($start=0;$start<=$maximum;$start++){
        echo "$start<br>";
    }
}

compter($maximum);

compter_for($maximum);
