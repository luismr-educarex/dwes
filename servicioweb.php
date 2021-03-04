<?php

//Sistema de logger
require './vendor/autoload.php';
Logger::configure('config.xml');
$logger = Logger::getLogger("default");


?>