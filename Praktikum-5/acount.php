<?php
class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor, $saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    function penarikan($uang){
        $this->saldo = $this->saldo - $uang;
    }
    
    function cetak(){
        echo 'Nomor Account : '.$this->nomor;
        echo '<br/> Saldonya : '.$this->saldo;
    }
}