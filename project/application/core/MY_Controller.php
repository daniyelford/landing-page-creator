<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
// 		$this->lang->load('fa');
		$this->load->model('ChatOrTicket');
		$this->load->model('Menu');
		$this->load->model('Auth_model');
		$this->load->model('News');
		$this->load->model('Map_model');
	//	$this->load->model('');
	//	$this->load->model('');
	//	$this->load->model('');
	}
}
?>