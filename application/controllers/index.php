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
			$this->data = array(
				'skin1' => $this->vote_model->skin_get_first_skin(),
				'skin2' => $this->vote_model->skin_get_second_skin(),
				'skin3' => $this->vote_model->skin_get_third_skin(),
				'voice1'=> $this->vote_model->voice_get_first_voice(),	
				'voice2'=> $this->vote_model->voice_get_second_voice(),	
				'voice3'=> $this->vote_model->voice_get_third_voice(),	
			);  
            $data = array(
                 'title' => 'Home'
            );
            //var_dump($this->data);
            $this->parser->parse('templates/header', $data);
			$this->parser->parse('lol/index',$this->data);
			$this->load->view('templates/footer');
		}
		
		public function vote_skin()
		{
			$data = array(
                 'title' => ''
            );
			$num = $this->vote_model->skin_get_number();
			for ($i=1; $i<=$num; $i++)
				$this->data[$i] = $this->vote_model->skin_get_that_skin($i);
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('lol/skin',$this->data);
			$this->load->view('templates/footer');
		}

		public function vote_voice()
		{
			$data = array(
					'title' => ''
			);
			$num = $this->vote_model->voice_get_number();
			for ($i=1; $i<=$num; $i++)
				$this->data[$i] = $this->vote_model->voice_get_that_voice($i);
			$this->parser->parse('templates/header', $data);
			$this->parser->parse('lol/voice',$this->data);
			$this->load->view('templates/footer');
		}
	}
?>
