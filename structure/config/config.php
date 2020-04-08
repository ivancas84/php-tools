<?php

//ini_set("display_errors", 1);  //testing
//session_id(1); //testing
//ini_set('date.timezone', 'America/Argentina/Buenos_Aires'); //testing
//session_set_cookie_params(7200, '/', 'localhost'); //testing
//session_set_cookie_params(7200, '/', '.dominio.com.ar'); //testing


/**
 * Identificacion
 */
define("SYS_NAME", "System Name"); //nombre del modulo de administracion
define("PATH_SYS", "path/to/structure"); //path correspondiente al módulo de administración

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
 * Raiz del modulo de administracion
 */
define("PATH_HTTP" , "http://" . $_SERVER["SERVER_NAME"] . "/" . PATH_SYS . "/");
define("PATH_ROOT" ,  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/");
//define("PATH_LOGIN", "http://" . $_SERVER["SERVER_NAME"] . "/" . PATH_SYS . "/login/"); //path correspondiente al módulo de login

/**
 * Rutas de inclusion
 */
set_include_path(get_include_path()
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/src"
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/src/core"
);
