<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Makanan_model extends CI_Model{
		private $_table = "list_makanan";

		public $kode_makanan;
		public $nama_makanan;
		public $harga_makanan;

		public function rules(){
			return [
				['field' => 'nama_makanan',
				'label' => 'Nama Makanan',
				'rules' => 'required'],

				['field' => 'harga_makanan',
				'label' => 'Harga Makanan',
				'rules' => 'numeric']

				
			];
		}

		public function getAll(){
			return $this->db->get($this->_table)->result();
		}

		public function getById($id){
			return $this->db->get_where($this->_table, ["kode_makanan" =>$id])->row();
		}
		
		public function save(){
			$post = $this->input->post();
			$this->kode_makanan = uniqid();
			$this->nama_makanan = $post["nama_makanan"];
			$this->harga_makanan = $post["harga_makanan"];
			$this->db->insert($this->_table, $this);
		}

		public function update(){
			$post = $this->input->post();
			$this->kode_makanan = $post["id"];
			$this->nama_makanan = $post["nama_makanan"];
			$this->harga_makanan = $post["harga_makanan"];
			$this->db->update($this->_table, $this, array('kode_makanan' =>$post['id']));
		}
		
		public function delete($id){
			return $this->db->delete($this->_table, array("kode_makanan" =>$id));
		}
}