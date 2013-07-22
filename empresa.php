<?php

require_once 'smarty.php';
$smarty->assign("conteudo", "empresa.tpl");
$smarty->assign("titulo", "trabalhnado com smarty");

$smarty->display("layout.tpl");
