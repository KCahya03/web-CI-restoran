<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_minuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Minuman_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["list_minuman"] = $this->Minuman_model->getAll(); // ambil data dari model
		$this->load->view('kasir/daftar_menu/template_minuman', $data);// kirim data ke view
	}

	public function add(){
		$minuman = $this->Minuman_model;
		$validation = $this->form_validation;
		$validation->set_rules($minuman->rules());
		
		if ($validation->run()){
			$minuman->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view("kasir/daftar_menu/add_minuman");
	}

	public function edit($id = null){
		if (!isset($id)) redirect('kasir/daftar_menu/template_minuman');
		$minuman = $this->Minuman_model;
		$validation = $this->form_validation;
		$validation->set_rules($minuman->rules());
		
		if ($validation->run()){
			$minuman->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data["list_minuman"] = $minuman->getById($id);

		if (!$data["list_minuman"]) show_404();
		$this->load->view("kasir/daftar_menu/edit_minuman", $data);
	}

	public function delete($id=null)
	{
	if (!isset($id)) show_404();
		if ($this->Minuman_model->delete($id)) {
			redirect(site_url('kasir/daftar_menu/template_minuman'));
		}
	}
}