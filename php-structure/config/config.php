<?php

//ini_set("display_errors", 1);  //testing
//ini_set('date.timezone', 'America/Argentina/Buenos_Aires');

/**
 * Raiz
 * Acceso $_SERVER["DOCUMENT_ROOT"] . "/" .
 * Enlace URL . "/" .
 */
define("PATH_ROOT" , "path-to-structure"); //raiz
define("PATH_SRC" , "path-to-structure/src"); //codigo fuente
define("PATH_CORE" , "php-core"); //raiz del core
define("PATH_UPLOAD" , "path-to-structure/upload"); //archivos subidos
define("PATH_FILE" , "path-to-structure/file"); //archivos creados

/**
 * Acceso a la base de datos
 */
define("DATA_DBNAME", "dbname");
define("DATA_USER", "root");
define("DATA_PASS", "");
define("DATA_HOST", "localhost");
define("DATA_SCHEMA", "");

/**
 * Acceso a la base de datos de transacciones
 */
define("TXN_DBNAME", "sistema");
define("TXN_USER", "root");
define("TXN_PASS", "");
define("TXN_HOST", "localhost");
define("TXN_SCHEMA", "");

/**
 * Valores especiales
 */
define("DISABLE_ENTITIES", ""); //entidades de la base de datos que seran deshabilitadas
define("UNDEFINED", "~"); //indica que el valor no esta definido
define("DEFAULT_VALUE", "^"); //indica que debe asignarse valor por defecto

/**
 * JWT
 */
define("JWT_KEY","your-256-bit-secret");
define("JWT_ALGORITHM", "HS256");

/**
 * Rutas de inclusion
 */
set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SRC
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PHP_CORE
);
