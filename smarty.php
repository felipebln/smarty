<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once './libs/smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->cache_dir = "cache";
$smarty->config_dir = "configs";
$smarty->template_dir = "tpl";
$smarty->compile_dir = "tplc";
