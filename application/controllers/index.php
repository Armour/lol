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
				'skin' => array(
					$this->vote_model->skin_get_former_skin(1),
					$this->vote_model->skin_get_former_skin(2),
					$this->vote_model->skin_get_former_skin(3),
				),
				'voice'=> array(
					$this->vote_model->voice_get_former_voice(1),	
					$this->vote_model->voice_get_former_voice(2),
					$this->vote_model->voice_get_former_voice(3),
				),
			);  
            $this->title = array(
                 'title' => 'Home'
            );
            //var_dump($this->data);
            $this->parser->parse('templates/header', $this->title);
			$this->parser->parse('lol/index',$this->data);
			$this->load->view('templates/footer');
		}
		
		public function vote_skin($id)
		{
			$this->vote_model->skin_vote_this_one($id);
            $this->title = array(
                 'title' => 'Success'
            );
			$this->parser->parse('templates/header', $this->title);
            $this->load->view('lol/vote_skin_success');
			$this->load->view('templates/footer');
		}

		public function vote_voice($id)
		{
			$this->vote_model->voice_vote_this_one($id);	
            $this->title = array(
                 'title' => 'Success'
            );
			$this->parser->parse('templates/header', $this->title);
            $this->load->view('lol/vote_voice_success');
			$this->load->view('templates/footer');
		}
		
		public function vote_skin_show_all()
		{
			$this->title = array(
					'title' => 'Skin'
			 );
			$num = $this->vote_model->skin_get_number();
			for ($i=0; $i<$num; $i++)
		    	$this->data['skin'][$i] = $this->vote_model->skin_get_this_one_in_all($i+1);
			//var_dump($this->data);
			$this->parser->parse('templates/header', $this->title);
			$this->parser->parse('lol/skin',$this->data);
			$this->load->view('templates/footer');
		}
		
		public function vote_voice_show_all()
		{
			$this->title  = array(
					'title' => 'Voice'
			);
			$num = $this->vote_model->voice_get_number();
			for ($i=0; $i<$num; $i++)
				$this->data['voice'][$i] = $this->vote_model->voice_get_this_one_in_all($i+1);
			$this->parser->parse('templates/header', $this->title);
			$this->parser->parse('lol/voice',$this->data);
			$this->load->view('templates/footer');
		}
	}
?>
