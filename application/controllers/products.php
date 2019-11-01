<?php
class products extends CI_Controller{
	public function index(){
		$this->load->view('products.php');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}
}
