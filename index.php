<?php

// Cargar el autoloader de Composer
require "vendor/autoload.php";
// Cargar la configuración de la conexión 
require 'generated-conf/config.php';

$author = new Author();
$author->setFirstName('Jane');
$author->setLastName('Austen');
$author->save();