<?php
class Classes extends CI_Controller{
public function index(){
		$this->load->view('classes.php');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
}