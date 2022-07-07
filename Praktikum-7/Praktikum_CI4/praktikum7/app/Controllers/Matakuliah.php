<?php

namespace App\Controllers;

use App\Models\MatakuliahModel;

class Matakuliah extends BaseController
{
    public function index(){
        $this->mk1 = new Matakuliah();
        $this->mk1->kode = 'PW02';
        $this->mk1->nama = 'Pemrograman Web 2';
        $this->mk1->sks = 3;

        $this->mk2 = new Matakuliah();
        $this->mk2->kode = 'BD03';
        $this->mk2->nama = 'Basis Data';
        $this->mk2->sks = 4;
        
        $this->mk3 = new Matakuliah();
        $this->mk3->kode = 'BI01';
        $this->mk3->nama = 'Bahasa Inggris';
        $this->mk3->sks = 2;

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk']=$list_mk;

        return view('matakuliah/index', $data);
        
    }
}
?>