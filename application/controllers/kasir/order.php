<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Order_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["order_table"] = $this->Order_model->getAll(); // ambil data dari model
		$this->load->view('kasir/transaksi/data_transaksi', $data);// kirim data ke view
	}

	public function add(){
		$transaksi = $this->Order_model;
		$validation = $this->form_validation;
		$validation->set_rules($transaksi->rules());
		
		if ($validation->run()){
			$transaksi->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view("kasir/transaksi/add_transaksi");
	}

}