<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/config.php");

define("PATH_CORE", "path/to/core/src");
define("PATH_SITE", "path/to/this/site/src");
define("PATH_DOC", "path/to/gen/site/doc");
define("PATH_GEN", "path/to/gen/site/src");

set_include_path(
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SITE
  . PATH_SEPARATOR . $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_CORE
  . get_include_path()
);