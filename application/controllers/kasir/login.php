<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->user_model->doLogin()) redirect(site_url('home'));
        }

        // tampilkan halaman login
        $this->load->view("menulogin");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('menulogin'));
    }
}