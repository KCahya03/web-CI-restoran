<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Makanan_model");
		$this->load->model("Minuman_model");
	}

	public function index()
	{
		$data["list_makanan"] = $this->Makanan_model->getAll(); // ambil data dari model
		$data["list_minuman"] = $this->Minuman_model->getAll(); // ambil data dari model
		$this->load->view('kasir/template_home', $data);
	}
}