<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Vote extends CI_controller
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
			$data = $this->vote_model->get_essay_title();
			$this->load->view('templates/header');
			$this->load->view('vote/index',$data);
			$this->load->view('templates/footer');
		}
		
		public function register()
		{
			if (!isset($_SESSION)) session_start();
		
			$_SESSION["name"] = '';
			
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('name','用户名','required');
			$this->form_validation->set_rules('psw','密码','required');
			$this->form_validation->set_rules('email','邮箱','required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('vote/register');
			}
			else
			{
				if ($this->vote_model->find_user() == 1)
				{
					echo "<script language='JavaScript'> alert('用户名已经存在');</script>";
					$this->load->view('vote/register');
				}
				else if ($_SESSION["checkcode"] != $_POST["code"])
				{
					echo "<script language='JavaScript'> alert('验证码不正确');</script>";
					$this->load->view('vote/register');
				}
				else
				{
					$this->vote_model->add_new_user();
					?>
						<h3><a href="login"> 注册成功!单击进入登录界面  </a></h3>
					<?php
				}
			}
		}
		
		public function login()
		{
			if (!isset($_SESSION)) session_start();
		
			$_SESSION["name"] = '';
		
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->helper('form');
		
			$this->form_validation->set_rules('name','用户名','required');
			$this->form_validation->set_rules('psw','密码','required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('vote/login');
				$this->load->view('templates/header');
			}
			else
			if ($_SESSION["checkcode"] != $_POST["code"])
			{
				echo "<script language='JavaScript'> alert('验证码不正确');</script>";
				$this->load->view('templates/header');
				$this->load->view('vote/login');
				$this->load->view('templates/header');
			}
			else
			if ($this->vote_model->find_user() == 0)
			{
				echo "<script type='text/javascript'>  alert('此用户名不存在');</script>";
				$this->load->view('templates/header');
				$this->load->view('vote/login');
				$this->load->view('templates/header');
			}
			else
			{
				$psw = hashit($_POST["name"],$_POST["psw"]);
				
				if ($this->vote_model->check_user() == 1)
				{
					$_SESSION['name'] = $_POST["name"];
					$data = $this->vote_model->get_essay_title();
					$this->load->view('templates/header');
					$this->load->view('vote/index',$data);
					$this->load->view('templates/header');
					redirect('vote/index','refresh');
				}
				else
				{
					$_SESSION['name'] = '';
					echo "<script type='text/javascript'> alert('密码错误');</script>";
					$this->load->view('templates/header');
					$this->load->view('vote/login');
					$this->load->view('templates/header');
				}
			}
		}
		
		public function vote_it()
		{
			$this->load->view('templates/header');
			$this->load->view('vote/vote');
			$this->load->view('templates/footer');
		}

		public function show_vote_result()
		{
			$this->load->view('templates/header');
			$this->load->view('vote/result');
			$this->load->view('templates/footer');
		}

		public function add_essay()
		{
			if (@($_SESSION['name']==''))
			{
				echo "<script type='text/javascript'> alert('未登录，没有权限');</script>";
				$this->load->view('templates/header');
				$this->load->view('vote/login');
				$this->load->view('templates/footer');
			}	else 
			{
				if (@($_POST['title'] != '' && $_POST['essay']!=''))
				{
					$this->vote_model->add_new_essay();
					
					$this->load->view('templates/header');
					$this->load->view('vote/success');
					$this->load->view('templates/footer');
				}	else
				{
					$this->load->view('templates/header');
					$this->load->view('vote/essay');
					$this->load->view('templates/footer');
				}
			}
		}
		
		public function show_essay($mark = 0)
		{
			if (! is_numeric($mark)) $mark = 0;
			
			$data['query'] = $this->vote_model->get_essay($mark);
			
			$this->load->view('templates/header');
			$this->load->view('vote/show',$data);
			$this->load->view('templates/footer');
		}
	}
	
	include_once "function.php";
?>