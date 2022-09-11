<?php
//cette fonction permet de sécuriser mes chaine de charactères
function str_secur($string){
    return trim(htmlspecialchars($string));
}

//Meilleure visibilité du débugage 
function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '<pre>';
}