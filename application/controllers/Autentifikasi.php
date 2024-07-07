<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/header.php') ;
            $this->load->view('auth/login.php') ;
            $this->load->view('auth/footer.php') ;
        } else{
            echo ("cie bisa login");
        }
    }

	public function login()
	{
		$this->load->view('auth/header.php');
        $this->load->view('auth/login.php');
        $this->load->view('auth/footer.php');
	}
}
