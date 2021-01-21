<?php

require_once($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "magistrados-estructura" . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "config.php");

set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "" . DIRECTORY_SEPARATOR . "php-main-gen" . DIRECTORY_SEPARATOR . "src"
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "" . DIRECTORY_SEPARATOR . "php-main-gen" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "src"
  . PATH_SEPARATOR . get_include_path()
);