<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index(){
        $this->dsn1 = new DosenModel();
        $this->dsn1->id=1;
        $this->dsn1->nidn='012201';
        $this->dsn1->nama='Amalia Rahmah';
        $this->dsn1->gender ='P';
        $this->dsn1->tmp_lahir = 'Yogyakarta';
        $this->dsn1->tgl_lahir = '1986-01-03';
        $this->dsn1->pendidikan = 'S3';

        $this->dsn2 = new DosenModel();
        $this->dsn2->id=2;
        $this->dsn2->nidn ='012202';
        $this->dsn2->nama ='Ahmad Rio';
        $this->dsn2->gender ='L';
        $this->dsn2->tmp_lahir = 'Pekalongan';
        $this->dsn2->tgl_lahir = '1986-12-13';
        $this->dsn2->pendidikan = 'S2';

        $this->dsn3 = new DosenModel();
        $this->dsn3->id=3;
        $this->dsn3->nidn='012203';
        $this->dsn3->nama='Sirojul Munir';
        $this->dsn3->gender='L';
        $this->dsn3->tmp_lahir = 'Solo';
        $this->dsn3->tgl_lahir = '1985-03-13';
        $this->dsn3->pendidikan = 'S2';


        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;


        
        return view('dosen/index', $data);
        
    }
}
?>