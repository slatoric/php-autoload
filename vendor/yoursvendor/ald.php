<?php
if(!defined("PATH_SEPARATOR"))define("PATH_SEPARATOR",getenv("COMSPEC")?";":":");
ini_set("include_path",ini_get("include_path").PATH_SEPARATOR.dirname(__FILE__));//path to current directory (root of the vendor)
spl_autoload_extensions(".php");
spl_autoload_register();