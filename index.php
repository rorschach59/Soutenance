<?php

session_name("Soutenance");
session_start();

// Inclure les fonctions
include_once 'app/functions/autoload.php';

// Inclure le fichier de routes
include_once 'app/routes.php';

// Inclure le fichier de pages
include_once 'app/pages.php';

// Inclure le fichier de fonctions pour les users
include_once 'php/model/users.php';


// -- Inclure les pages communes
// --
include_once 'php/common/header.php';
include_once $_ROUTES[$page][1];
include_once 'php/common/footer.php';

 ?>
