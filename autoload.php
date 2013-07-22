<?php

function autoloader($classe){
    $path = str_replace("_", "/", $classe);
    require_once $path.".php";
}

spl_autoload_register("autoloader");