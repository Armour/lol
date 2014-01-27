<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Index extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();		
			$this->load->model('vote_model');
			$this->load->helper('url');
			$this->load->helper('form');
		}

		public function index()
		{	
			$this->load->view('templates/header');
			$this->load->view('lol/index');
			$this->load->view('templates/footer');
		}
		
		public function vote_voice()
		{
			$this->load->view('templates/header');
			$this->load->view('lol/voice');
			$this->load->view('templates/footer');
		}

		public function vote_skin()
		{
			$this->load->view('templates/header');
			$this->load->view('lol/skin');
			$this->load->view('templates/footer');
		}
	}
?>