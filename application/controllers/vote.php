<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Vote extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('vote_model');
		}

		public function index()
		{
			$this->load->view('vote/index');
		}

		public function vote_it()
		{
			$this->load->view('vote/vote');
		}

		public function show_vote_result()
		{
			$this->load->view('vote/result');
		}

		public function add_essay()
		{
			$this->load->view('vote/essay');
		}
		
	}
?>