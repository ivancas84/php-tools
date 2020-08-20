<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/config.php");

define("PATH_SITE", "path/to/site/src");

set_include_path(
  $_SERVER["DOCUMENT_ROOT"] . "/" . PATH_SITE
  . PATH_SEPARATOR . get_include_path()
);