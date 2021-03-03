<?php

require 'configuracion.php';


$logger->trace("ESTO ES UN MENSAJE DE TRAZA.");   
$logger->debug("ESTO ES UN MENSAJE DE DEBUG"); 

$logger->info("ESTO ES INFORMACIÓN.");
$logger->warn("ESTO ES UN WARNING ...");
$logger->error("ESTO ES UN ERROR...");
$logger->fatal("ESTO ES UN FATAL ERROR...");

$logger->info("ESTO ES INFORMACIÓN 2.");
$logger->info("ESTO ES INFORMACIÓN 3.");
$logger->info("ESTO ES INFORMACIÓN 4.");
$logger->info("ESTO ES INFORMACIÓN 5.");

$logger->error("ESTO ES UN ERROR 2...");
$logger->error("ESTO ES UN ERROR 3...");
$logger->error("ESTO ES UN ERROR 4...");


?>