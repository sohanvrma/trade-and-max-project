<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }

	public function home()
	{
		$this->load->view('admin/home');
	}
    public function forget_password()
	{
		$this->load->view('admin/forget-password');
	}
    public function login()
	{
		$this->load->view('admin/login');
	}
    public function users()
	{
		$this->load->view('admin/users');
	}
	public function profile()
	{
		$this->load->view('admin/profile');
	}
	public function single_user()
	{
		$this->load->view('admin/single-user');
	}
}
