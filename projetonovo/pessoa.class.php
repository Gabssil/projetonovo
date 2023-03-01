<?php
//classe com nome de pessoa 
class Pessoa {
    //objetos com visibilidade privada 
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    //metodo de captura de valor de objeto
    public function getNome(){
        return $this->nome;
    }
    //metodo de alteração de valor d objeto
    public function setNome($nome){
     $this->nome =$nome;
    }
    public function getEndereço(){
        return $this->endereço;
    }
    public function setEndereço($endereco){
        $this->endereço = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
         $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
     $this->estado = $estado;
    }
}
?>