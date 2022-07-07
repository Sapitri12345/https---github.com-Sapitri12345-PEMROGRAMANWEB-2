<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
    public function index(){
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->kode = 'PW02';
        $this->mk1->nama = 'Pemrograman Web 2';
        $this->mk1->sks = 3;

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->kode = 'BD03';
        $this->mk2->nama = 'Basis Data';
        $this->mk2->sks = 4;
        
        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->kode = 'BI01';
        $this->mk3->nama = 'Bahasa Inggris';
        $this->mk3->sks = 2;

        $this->load->model('matakuliah_model','mk4');
        $this->mk4->kode = $this->input->post('kode');
        $this->mk4->nama = $this->input->post('nama');
        $this->mk4->sks = $this->input->post('sks');

        $list_mk = [$this->mk1, $this->mk2, $this->mk3, $this->mk4];
        $data['list_mk']=$list_mk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Matakuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create',$data);
        $this->load->view('layout/footer');
    }

}
?>