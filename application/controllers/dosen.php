<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model ('Dosen_model','dsn1');
        $this->mhs1->id=1;
        $this->mhs1->nidn='01410';
        $this->mhs1->nama='Putri Handayani';
        $this->mhs1->gender='P';
        $this->mhs1->pendidikan ='S1 Manajemen';

        $this->load->model ('Dosen_model','dsn2');
        $this->mhs1->id=2;
        $this->mhs1->nidn='01411';
        $this->mhs1->nama='Anugerah Eka';
        $this->mhs1->gender='L';
        $this->mhs1->pendidikan ='S2 Sastra Inggris';

        $this->load->model ('Dosen_model','dsn3');
        $this->mhs1->id=3;
        $this->mhs1->nidn='01412';
        $this->mhs1->nama='Dirga Sulaiman';
        $this->mhs1->gender='L';
        $this->mhs1->pendidikan ='S2 Teknik Informatika';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        // $this->load->view('header');
        $this->load->view('dosen/index',$data);
        // $this->load->view('footer');
    }
}
?>