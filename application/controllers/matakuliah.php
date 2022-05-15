<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class matkul extends CI_Controller {
    public function index()
    {
        $this->load->model ('matkul_model','mk1');
        $this->mhs1->id=1;
        $this->mhs1->nama='Putri Handayani';
        $this->mhs1->sks='P';
        $this->mhs1->kode='S1 Manajemen';

        $this->load->model ('matkul_model','mk2');
        $this->mhs1->id=2;
        $this->mhs1->nama='Anugerah Eka';
        $this->mhs1->sks='L';
        $this->mhs1->kode='S2 Sastra Inggris';

        $this->load->model ('matkul_model','mk3');
        $this->mhs1->id=3;
        $this->mhs1->nama='Dirga Sulaiman';
        $this->mhs1->sks='L';
        $this->mhs1->kode='S2 Teknik Informatika';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        // $this->load->view('header');
        $this->load->view('dosen/index',$data);
        // $this->load->view('footer');
    }
}
?>