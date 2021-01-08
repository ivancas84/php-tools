<?php
/**
 * Interpretacion de la api del sistema
 */
    
  // Allow from any origin
  if (isset($_SERVER['HTTP_ORIGIN'])) {
      // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
      // you want to allow, and if so:
      header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
      header('Access-Control-Allow-Credentials: true');
      header('Access-Control-Max-Age: 86400');    // cache for 1 day
  }
  
  // Access-Control headers are received during OPTIONS requests
  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
      
      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
          // may also be using GET, OPTIONS, PUT, PATCH, HEAD etc
          header("Access-Control-Allow-Methods: POST");         
      
      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
          header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
  
      exit(0); //finalizar el programa normalmente, sino se incluye no se porque dispara error
  }
  

require_once("../config/config.php");
require_once("function/strto.php");
require_once("class/Container.php");

$param = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$index = array_search("api", $param);
$resource = array_slice($param, -2);
$entity = $resource[0];
$index = strpos($resource[1],"?");
$action = ($index !== false) ? substr_replace($resource[1], '', $index) : $resource[1];

try{
  $container = new Container();
  $controller = $container->getApi($action, $entity);
  $data = $controller->main();
  echo json_encode($data);

} catch (Exception $ex) {
  error_log($ex->getTraceAsString());
  $code = ($ex->getCode()) ? $ex->getCode() : 500;
  http_response_code($code);
  echo $ex->getMessage();
}