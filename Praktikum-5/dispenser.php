<?php
require_once "class_dispenser.php";
class Harga extends Dispenser{
    
    public function __construct($hargaSegelas){
        $this -> hargaSegelas = $hargaSegelas;
        echo "<br/>Harga Satu Gelas = " . "Rp. " . $hargaSegelas;
    }
    public function harga(){
        return $this -> hargaSegelas * 10 ;
    }
}

    echo "<hr/><b><i> Diketahui: </i></b><br/>";
    echo "<br/>  PHI = " . Dispenser :: PHI;

    $volumegelas = new Dispenser(10, 60);
    echo "<br/> Volume Satu Gelas = " . $volumegelas -> volumeGelas() . " cm3";
    echo "<hr/>";
    echo "<b><i>Diketahui :</i></b><br/>";
    $harga = new Harga(7500);
    echo "<br/> Maka, harga untuk 10 gelas adalah " . "<b>Rp. " . $harga -> harga(). "</b>";
    echo "<br/> Dan jumlah volume dari 10 gelas itu adalah : ". ($volumegelas -> volumeGelas() * 10). "cm3". "<hr/>";
?>