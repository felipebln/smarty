<?php
require_once './config.php';


$livros= new libs_classes_livros();
$dados = $livros->listarLivros();

if(isset($_POST["ok"])):
    $nome = trim(addslashes($_POST["nome"]));
    $preco= trim(addslashes($_POST["preco"]));
    $foto =  $_FILES['foto']["name"];
    $temp = $_FILES['foto']["tmp_name"];
    $extensao = end(explode(".", $foto));
    $novoNome = uniqid().".".$extensao;
    echo $novoNome;
    
    $livros = new libs_classes_livros();
    
    $livros->setNome($nome);
    $livros->setPreco($preco);
    $livros->setFoto($novoNome);
    
    if(move_uploaded_file($temp, "fotos/".$novoNome)):
        $livros->cadastrar();
        header("location:index.php");
    endif;
   
endif;

$smarty->assign("livros", $dados);
$smarty->assign("titulo", "smarty");


$smarty->assign("conteudo", "home.tpl");

$smarty->display("layout.tpl");
