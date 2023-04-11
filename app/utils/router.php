<?php

/**
 * THIS FILE HELPS US TO DISPACTH THE ROUTES AND CALL THE SUITABLE CONTROLLER
 **/

$route = $_SERVER['REQUEST_URI']; // Get the request URI

if ($route === '/') {
    echo 'Voici la page d\'acceil.';
}

else if ($route === '/signup') {
    require_once 'app/core/views/signup.php';
}

else if ($route === '/new') {
    require_once 'app/core/views/add_annonce.php';
}

else {
    echo '404 vous etes perdue ;(';
}

// author : @ptahemdjehuty
