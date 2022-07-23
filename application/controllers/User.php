<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }

	public function home()
	{
		$this->load->view('users/home');
	}
    public function login()
	{
		$this->load->view('users/login');
	}
    public function register()
	{
		$this->load->view('users/register');
	}
    public function forget_password()
	{
		$this->load->view('users/forget-password');
	}
    public function profile()
	{
		$this->load->view('users/profile');
	}
}
