<?php
    class Dispenser{
        public $volume;
        public $hargaSegelas;
        public $volumeGelas;
        public $namaMinuman;
        const PHI = 3.14;
        public $jari_jari;
        public $tinggi;
    
        public function __construct($r, $tinggi){
            $this -> jari_jari = $r;
            $this -> tinggi = $tinggi;
            echo "<br/>Jari-jari = " . $r . " cm";
            echo "<br/>Tinggi = " . $tinggi . " cm";
        }
    
        public function volumeGelas(){
            return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
        }
    }
?>