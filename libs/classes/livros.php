<?php
class libs_classes_livros{
    private $nome;
    private $preco;
    private $foto;
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

        
    public function listarLivros(){
        $pdo = new PDO("mysql:host=localhost;dbname=smaty",
                "root","1234");
        $listar = $pdo->query("select * from livros");
        return $listar->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function cadastrar(){
        $pdo = new PDO("mysql:host=localhost;dbname=smaty",
                "root","1234");
        $cadastrar = $pdo->prepare("insert into livros
            (livro, preco, foto) values 
            (?,?,?)");
        $cadastrar->bindValue(1,$this->getNome() );
        $cadastrar->bindValue(2,$this->getPreco() );
        $cadastrar->bindValue(3,$this->getFoto() );
        
        print_r($cadastrar);
        echo $this->getNome();
        echo $this->getPreco();
        echo $this->getFoto();
        $cadastrar->execute();
    }
    
}