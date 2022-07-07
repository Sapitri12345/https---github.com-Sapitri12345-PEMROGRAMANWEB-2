<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='0110221016';
        $this->mhs1->nama='Muhamad';
        $this->mhs1->gender='L';
        $this->mhs1->ipk= 3.70;


        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='0110121015';
        $this->mhs2->nama='Anisah Azizah';
        $this->mhs2->gender='P';
        $this->mhs2->ipk= 3.80;


        $this->load->model('mahasiswa_model','mhs3');
        $this->mhs3->id=3;
        $this->mhs3->nim='0110111017';
        $this->mhs3->nama='Kartika Putri';
        $this->mhs3->gender='P';
        $this->mhs3->ipk= 3.90;

        $this->load->model('mahasiswa_model','mhs4');
        $this->mhs4->id=4;
        $this->mhs4->nim='0110121018';
        $this->mhs4->nama='Rizki Aditya';
        $this->mhs4->gender='L';
        $this->mhs4->ipk= 3.85;

        $this->load->model('mahasiswa_model','mhs5');
        $this->mhs5->id=5;
        $this->mhs5->nim='0110121019';
        $this->mhs5->nama='Anita';
        $this->mhs5->gender='P';
        $this->mhs5->ipk= 3.25;

        $this->load->model('mahasiswa_model','mhs6');
        $this->mhs6->id=6;
        $this->mhs6->nim='0110121019';
        $this->mhs6->nama='Firhan';
        $this->mhs6->gender='L';
        $this->mhs6->ipk= 3.65;

        $this->load->model('mahasiswa_model','mhs7');
        $this->mhs7->id=7;
        $this->mhs7->nim='0110121019';
        $this->mhs7->nama='Hanifah';
        $this->mhs7->gender='P';
        $this->mhs7->ipk= 3.75;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4, $this->mhs5, $this->mhs6, $this->mhs7];
        $data['list_mhs']=$list_mhs;


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
        
    }
}
