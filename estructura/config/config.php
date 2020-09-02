<?php

//ini_set("display_errors", 1);  //testing
//session_id(1); //testing
//ini_set('date.timezone', 'America/Argentina/Buenos_Aires'); //testing
//session_set_cookie_params(7200, '/', 'localhost'); //testing
//session_set_cookie_params(7200, '/', '.dominio.com.ar'); //testing

/**
 * Raiz
 */
define("PATH_ROOT" , "fines2-estructura");
define("PATH_SRC" , "fines2-estructura/src");
define("PATH_UPLOAD" , "upload");
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
define("TXN_DBMS", "mysql"); //mysql || pgsql
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
  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SRC
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/php-core"
);
