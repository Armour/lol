<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Index extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();		
			$this->load->model('vote_model');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('parser');
		}

		public function index()
		{			
			// $skin1 = $this->vote_model->skin_get_first_skin();
			// $skin2 = $this->vote_model->skin_get_second_skin();
			// $skin3 = $this->vote_model->skin_get_third_skin();

			// $voice1 = $this->vote_model->voice_get_first_voice();
			// $voice2 = $this->vote_model->voice_get_second_voice();
			// $voice3 = $this->vote_model->voice_get_third_voice();
			
			// $this->data['skin1'] = $skin1;
			// $this->data['skin2'] = $skin2;
			// $this->data['skin3'] = $skin3;
			// $this->data['voice1'] = $voice1;
			// $this->data['voice2'] = $voice2;
			// $this->data['voice3'] = $voice3;
			
			$data = array(
				'title' => 'Home'
				);
			$this->parser->parse('templates/header', $data);
			$this->load->view('lol/index',$this->data);
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