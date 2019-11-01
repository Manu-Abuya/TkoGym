<?php
class Contact extends CI_Controller{
public function index(){
		$this->load->view('contact.php');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
}