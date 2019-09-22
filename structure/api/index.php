<?php

//require_once("../src/config/config.php");
header("Access-Control-Allow-Origin: *"); //dev
header("Access-Control-Allow-Headers: *"); //dev
header('Access-Control-Allow-Methods: POST'); //prod

//header('Content-Type: text/html; charset=utf-8'); //html
header('Content-Type: application/json; charset=utf-8'); //json
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); //dev
header("Cache-Control: post-check=0, pre-check=0", false); //dev
header("Pragma: no-cache"); //dev

session_start(); 
session_id(1); //dev

$param = explode('/', trim($_SERVER['REDIRECT_URL'], '/')); //dev
//$param = explode('/', trim($_SERVER['REQUEST_URI'], '/')); //prod

$index = array_search("api", $param);

$options = array_slice($param, -2);

define("ENTITY", $options[0]);
$script = $options[1];

$inc = require("api/" . $script . ".php");
//if(!$inc) print_r($_REQUEST);
