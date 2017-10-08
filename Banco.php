<?php

class Banco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->status = false;
        echo "<p>Conta Criada com Sucesso !!!". "</p>";
    }
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }
        elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta Com Dinheiro, Não posso fechar a contra de ". $this->getDono() ."</p>";
        }
        elseif ($this->getSaldo() < 0){
            echo "Conta com Débito";
        }
        else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " Fechada com sucesso !!</p>";
        }
    }

    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$". $v ." na conta de ". $this->getDono() . "</p>";
        }
        else {
            echo "FATAL <b>ERROR</b>, impossível efetuar o deposito";
        }
    }

    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo()-$v);
                echo"<p>Saque de R$ ". $v ." Autorizado na conta de ". $this->getDono() ."</p>";
            } else {
                echo "Saldo Insufuciente.";
            }
        } else {
            echo "Impossível Sacar";
        }
    }

    public function pagarMensal($v){
        if ($this->getTipo()=="CC"){
            $v = 12;
        }
        elseif ($this->getTipo()=="CP"){
            $v = 20;
        }
        if ($this->getStatus()){
           $this->setSaldo($this->getSaldo()-$v);
           echo "<p>Mensalidade de R$ $v debitada na conta de ". $this->getDono() . "</p>";
        }
        else {
            echo "Impossível Cobrar";
        }
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }


    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}