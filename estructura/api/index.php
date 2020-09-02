<?php
/**
 * Interpretacion de la api del sistema
 */
header("Access-Control-Allow-Origin: *"); //comentar esta linea en produccion
header("Access-Control-Allow-Headers: *"); //comentar esta linea en produccion
//header("Access-Control-Allow-Headers: X-Requested-With");
header('Access-Control-Allow-Methods: POST'); //solo se permite POST

//header('Content-Type: text/html; charset=utf-8'); //debug
header('Content-Type: application/json; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//$documentRoot = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING);
require_once("../config/config.php");
require_once("function/strto.php");
require_once("class/Container.php");

//session_start();
//session_id(1); //comentar en produccion

$param = explode('/', trim($_SERVER['REDIRECT_URL'], '/')); //en cliente
//$param = explode('/', trim($_SERVER['REQUEST_URI'], '/')); //en produccion

$index = array_search("api", $param);

$options = array_slice($param, -2);

$entity = $options[0];
$api = $options[1];

try{
  $container = new Container();
  $controller = $container->getApi($api, $entity);
  $data = $controller->main();
  echo json_encode($data);

} catch (Exception $ex) {
  error_log($ex->getTraceAsString());
  http_response_code(500);
  echo $ex->getMessage();
}