<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Minuman_model extends CI_Model{
		private $_table = "list_minuman";

		public $kode_minuman;
		public $nama_minuman;
		public $harga_minuman;

		public function rules(){
			return [
				['field' => 'nama_minuman',
				'label' => 'Nama Minuman',
				'rules' => 'required'],

				['field' => 'harga_minuman',
				'label' => 'Harga Minuman',
				'rules' => 'numeric']

				
			];
		}

		public function getAll(){
			return $this->db->get($this->_table)->result();
		}

		public function getById($id){
			return $this->db->get_where($this->_table, ["kode_minuman" =>$id])->row();
		}
		public function save(){
			$post = $this->input->post();
			$this->kode_minuman = uniqid();
			$this->nama_minuman = $post["nama_minuman"];
			$this->harga_minuman = $post["harga_minuman"];
			$this->db->insert($this->_table, $this);
		}

		public function update(){
			$post = $this->input->post();
			$this->kode_minuman = $post["id"];
			$this->nama_minuman = $post["nama_minuman"];
			$this->harga_minuman = $post["harga_minuman"];
			$this->db->update($this->_table, $this, array('kode_minuman' =>$post['id']));
		}
		
		public function delete($id){
			return $this->db->delete($this->_table, array("kode_minuman" =>$id));
		}
}