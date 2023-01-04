<?php

require_once('src/controllers/MessageController.php');

/**
 * On affiche la page d'accueil
 */
$controller = new MessageController();
$controller->index();

