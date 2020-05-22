<?php

//ini_set("display_errors", 1);  //testing
//session_id(1); //testing
//ini_set('date.timezone', 'America/Argentina/Buenos_Aires'); //testing
//session_set_cookie_params(7200, '/', 'localhost'); //testing
//session_set_cookie_params(7200, '/', '.dominio.com.ar'); //testing

/**
 * Raiz
 */
define("PATH_ROOT" , "path/to/root");
define("PATH_CORE" , "path/to/core");
define("PATH_UPLOAD", "path/to/upload");

/**
 * Acceso a la base de datos
 */
define("DATA_DBNAME", "");
define("DATA_USER", "");
define("DATA_PASS", "");
define("DATA_HOST", "");
define("DATA_DBMS", ""); //mysql || pgsql
define("DATA_SCHEMA", "");

/**
 * Acceso a la base de datos de transacciones
 */
define("TXN_DBNAME", "");
define("TXN_USER", "");
define("TXN_PASS", "");
define("TXN_HOST", "");
define("TXN_DBMS", ""); //mysql || pgsql
define("TXN_SCHEMA", "");

/**
 * Valores especiales
 */
define("DISABLE_ENTITIES", ""); //entidades de la base de datos que seran deshabilitadas
define("UNDEFINED", "~"); //valor no definido
define("DEFAULT_VALUE", "^"); //valor por defecto

/**
 * Rutas de inclusion
 */
set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_ROOT
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_CORE
  . PATH_SEPARATOR . get_include_path()
);
