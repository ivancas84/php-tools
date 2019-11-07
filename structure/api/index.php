<?php

header("Access-Control-Allow-Origin: *"); //dev
header("Access-Control-Allow-Headers: *"); //dev
//header('Access-Control-Allow-Methods: POST'); //prod

//header('Content-Type: text/html; charset=utf-8'); //html
header('Content-Type: application/json; charset=utf-8'); //json
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); //dev
header("Cache-Control: post-check=0, pre-check=0", false); //dev
header("Pragma: no-cache"); //dev

require_once("../config/config.php");

session_start(); 
session_id(1); //dev

//$param = explode('/', trim($_SERVER['REDIRECT_URL'], '/')); //dev
$param = explode('/', trim($_SERVER['REQUEST_URI'])); //prod

$options = array_slice($param, -2); //se define un array con la entidad y el script

define("ENTITY", $options[0]);

$script = ((strpos($options[1], "?"))!== false) ? substr($options[1], 0, strpos($options[1], "?")) : $options[1];

$inc = require("api/" . $script . ".php");
//if(!$inc) print_r($_REQUEST);

