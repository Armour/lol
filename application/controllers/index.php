<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Index extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$data = .... ;
			$this->load->view('templates/header');
			$this->load->view('vote/index',$data);
			$this->load->view('templates/footer');
		}
	}