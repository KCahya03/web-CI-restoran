<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Order_model extends CI_Model{
		private $_table = "order_table";

		public $id_pelanggan;
		public $nama_pelanggan;

		public $nama_makanan;
		public $jumlah_makanan;
		public $total_harga_makanan;

		public $nama_minuman;
		public $jumlah_minuman;
		public $total_harga_minuman;

		public $total_harga;

		public function rules(){
			return [
				['field' => 'nama_pelanggan',
				'label' => 'Nama Pelanggan',
				'rules' => 'required'],

				['field' => 'nama_makanan',
				'label' => 'Nama Makanan',
				'rules' => 'required'],

				['field' => 'jumlah_makanan',
				'label' => 'Jumlah Makanan',
				'rules' => 'numeric'],

				['field' => 'total_harga_makanan',
				'label' => 'Total Harga Makanan',
				'rules' => 'numeric'],

				['field' => 'nama_minuman',
				'label' => 'Nama Minuman',
				'rules' => 'required'],

				['field' => 'jumlah_minuman',
				'label' => 'Jumlah Minuman',
				'rules' => 'numeric'],

				['field' => 'total_harga_minuman',
				'label' => 'Total Harga Minuman',
				'rules' => 'numeric'],

				['field' => 'total_harga',
				'label' => 'Total Harga',
				'rules' => 'numeric']

				
			];
		}

		public function getAll(){
			return $this->db->get($this->_table)->result();
		}

		public function getById($id){
			return $this->db->get_where($this->_table, ["id_pelanggan" =>$id])->row();
		}
		public function save(){
			$post = $this->input->post();
			
			$this->id_pelanggan = uniqid();
			$this->nama_pelanggan = $post["nama_pelanggan"];
			$this->nama_makanan = $post["nama_makanan"];
			$this->jumlah_makanan = $post["jumlah_makanan"];
			$this->total_harga_makanan = $post["total_harga_makanan"];
			$this->nama_minuman = $post["nama_minuman"];
			$this->jumlah_minuman = $post["jumlah_minuman"];
			$this->total_harga_minuman = $post["total_harga_minuman"];
			$this->total_harga = $post["total_harga"];
			$this->db->insert($this->_table, $this);
		}
}