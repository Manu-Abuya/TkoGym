<?php
class Home extends CI_Controller{
public function index(){
		$this->load->view('home.php');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
}
