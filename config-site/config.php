<?php

require_once("config/config.php");
/**
 * Configuración de la estructura
 */
 
define("PATH_ROOT_SITE" , "path/to/root-site");
/**
 * Raiz
 */

set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_ROOT_SITE . "/"
  . PATH_SEPARATOR . get_include_path()
);
/**
 * Rutas de inclusion
 */
