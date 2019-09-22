<?php
ini_set("display_errors", 1);
ini_set('date.timezone', 'America/Argentina/Buenos_Aires');
session_set_cookie_params(7200, '/', 'localhost'); //testing
//session_set_cookie_params(7200, '/', '.dominio.com.ar'); //produccion
//session_id(1); //testing

define("SYS_NAME", "name"); //nombre del modulo de administracion
define("PATH_SYS", "path"); //path correspondiente al módulo de administración

//constantes de acceso a la base de datos
define("DATA_DBNAME", "");
define("DATA_USER", "");
define("DATA_PASS", "");
define("DATA_HOST", "");
define("DATA_DBMS", ""); //mysql || pgsql

define("DATA_SCHEMA", "");
define("DISABLE_ENTITIES", "");

//raiz del modulo de administración
define("PATH_HTTP" , "http://" . $_SERVER["SERVER_NAME"] . "/" . PATH_SYS . "/");
define("PATH_ROOT" ,  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/");
//define("PATH_LOGIN", "http://" . $_SERVER["SERVER_NAME"] . "/" . PATH_SYS . "/login/"); //path correspondiente al módulo de login

define("UNDEFINED", "~"); //constante especial para indicar valor no definido, utilizada especialmente en las clases de manipulacion de valores
define("DEFAULT_VALUE", "^");

//definición de rutas de inclusión
set_include_path(get_include_path()
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/src"
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SYS . "/src/core"
);
