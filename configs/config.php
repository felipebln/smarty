<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/* definir a constante com o caminho do diretorio do smart */
define("SMARTY_DIR", "lib/Smart/libs/");
include(SMARTY_DIR. "Smarty.class.php");

$smarty = new Smarty();
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->compile_dir = "templates_c";
$smarty->template_dir = "templates";


