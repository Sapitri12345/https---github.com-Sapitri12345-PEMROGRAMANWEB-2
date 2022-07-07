<?php
require_once 'acount.php';

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    function transfer($ac_tujuan, $uang){
        $ac_tujuan->deposit($uang);
        $this->penarikan($uang);
        $this->penarikan(self::$biaya_admin);
    }

    function cetak(){
        parent::cetak();
        echo '<br/> Nama : '.$this->customer;
    }

}

?>