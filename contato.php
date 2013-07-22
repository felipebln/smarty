<?php

require_once 'smarty.php';
$smarty->assign("conteudo", "contato.tpl");
$smarty->assign("titulo", "tcontato");

$smarty->display("layout.tpl");
