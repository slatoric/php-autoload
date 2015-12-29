<?php
if(!defined("PATH_SEPARATOR"))define("PATH_SEPARATOR",getenv("COMSPEC")?";":":");
ini_set("include_path",ini_get("include_path").PATH_SEPARATOR.$_SERVER["DOCUMENT_ROOT"]);
spl_autoload_extensions(".php");
spl_autoload_register();