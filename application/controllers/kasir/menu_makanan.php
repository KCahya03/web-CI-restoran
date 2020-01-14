<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_makanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Makanan_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["list_makanan"] = $this->Makanan_model->getAll(); // ambil data dari model
		$this->load->view('kasir/daftar_menu/template_makanan', $data);// kirim data ke view
	}

	public function add(){
		$makanan = $this->Makanan_model;
		$validation = $this->form_validation;
		$validation->set_rules($makanan->rules());
		
		if ($validation->run()){
			$makanan->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view("kasir/daftar_menu/add_makanan");
	}

	public function edit($id = null){
		if (!isset($id)) redirect('kasir/daftar_menu/template_makanan');
		$makanan = $this->Makanan_model;
		$validation = $this->form_validation;
		$validation->set_rules($makanan->rules());
		
		if ($validation->run()){
			$makanan->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data["list_makanan"] = $makanan->getById($id);

		if (!$data["list_makanan"]) show_404();
		$this->load->view("kasir/daftar_menu/edit_makanan", $data);
	}

	public function delete($id=null)
	{
	if (!isset($id)) show_404();
		if ($this->Makanan_model->delete($id)) {
			redirect(site_url('kasir/daftar_menu/template_makanan'));
		}
	}
}