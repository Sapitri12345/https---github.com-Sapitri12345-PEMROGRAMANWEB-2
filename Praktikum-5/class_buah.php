<?php
class Buah {
    public $nama;
    public $warna;
    public $berat;

    function getNama($nama){ // public function (default)
        $this->nama =$nama;
    }
    protected function getWarna ($warna){ // protected function
        $this->warna =$warna;
    }
    private function getBerat ($berat){ // private function
        $this->berat =$berat;
    }
}

$mangga = new Buah();
$mangga->getNama('Mangga'); // OK
// $mangga->getWarna('Kuning'); // ERROR
// $mangga->getBerat('300'); // ERROR

?>