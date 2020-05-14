<!-- Derreumaux Valentin -  25/03/2020  15:15 -->
<?php

function stars($arg) {
    $max = 5;
    if ($arg > $max){
        return $erreur = 'Vous ne pouvez pas avoir plus de '.$max.' points';
    }
    $etoiles = '';

    for ($i = 1; $i <= $arg; $i++) {
        $etoiles .= '⭐';
    }
    $nbrEtoileGrise = $max - $arg;
    for ($i = 1; $i <= $nbrEtoileGrise; $i++) {
        $etoiles .= '<i class="icofont-star"></i>';
    }
    return $etoiles;
}