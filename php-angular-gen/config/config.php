<?php

require_once($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "fines2-estructura" . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php");

define("PATH_GEN" , "fines2-angular");

set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "" . DIRECTORY_SEPARATOR . "php-structure-gen" . DIRECTORY_SEPARATOR . "src"
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "" . DIRECTORY_SEPARATOR . "tablas" . DIRECTORY_SEPARATOR . "src"
  . PATH_SEPARATOR . get_include_path()
);