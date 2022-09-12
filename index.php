<?php

include_once'_config/config.php';
include_once'_config/db.php';
include_once'_functions/functions.php';

include_once'_classes/Authors.php'; 
include_once'_classes/Categories.php'; 
include_once'_classes/Articles.php'; 



//CREATION DU POINT D'ACCES

//ici on défini la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

// ici on place un tableau qui va contenir toutes les pages 

$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)){
    
    //inclusion de notre page
        include_once 'models/'.$page.'_model.php';
        include_once 'controllers/'.$page.'_controller.php';
        include_once 'views/'.$page.'_view.php';
} else {
    
    // sinon on retourne une erreur
    echo 'Erreur 404 . . .';
}