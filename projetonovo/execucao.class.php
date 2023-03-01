<?php
//importação
require_once("pessoa.class.php");

class teste{
    private $pessoa;

    public function __construct(){
        //objeto chamdo pessoa que receba a classe Pessoa
        $pessoa = new Pessoa();
        //passar um valor para o metado setNome
        $pessoa->setNome("gabs");
        //imprimir o valor do matodo getNome
        echo $pessoa->getNome();
    }
}new teste();
?>