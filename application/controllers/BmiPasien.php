<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BmiPasien extends CI_Controller {

    public function index()
    {
		//Susah kak pusing gak ketemu2 solusi :<
		$this->load->model('bmipasien_model','bmipasien1');
		$this->bmipasien1->id=1;
		$this->bmipasien1->kode='010001';
		$this->bmipasien1->nama='Dilan';
		$this->bmipasien1->gender='L';
		$this->bmipasien1->berat=60;
		$this->bmipasien1->tinggi=168;
		$this->bmipasien1->nilaiBMI();
		$this->bmipasien1->statusBMI();
        
		$this->load->model('bmipasien_model','bmipasien2');
		$this->bmipasien2->id=2;
		$this->bmipasien2->kode='020001';
		$this->bmipasien2->nama='Sukijah';
		$this->bmipasien2->gender='P';
		$this->bmipasien2->berat=55;
		$this->bmipasien2->tinggi=184;
		$this->bmipasien2->nilaiBMI();
		$this->bmipasien2->statusBMI();
        
		$this->load->model('bmipasien_model','bmipasien3');
		$this->bmipasien3->id=3;
		$this->bmipasien3->kode='030001';
		$this->bmipasien3->nama='Ahmad';
		$this->bmipasien3->gender='L';
		$this->bmipasien3->berat=80;
		$this->bmipasien3->tinggi=190;
		$this->bmipasien3->nilaiBMI();
		$this->bmipasien3->statusBMI();
		
		$list_data = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
		$data['list_data']=$list_data;

        $this->load->view('header');
        $this->load->view('bmipasien/index',$data);
        $this->load->view('footer');
    }
}