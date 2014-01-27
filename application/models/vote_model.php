<?php 
	class Vote_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function add_new_essay()
		{
			$data = array
			(
				'title' => $this->input->post('title',TRUE),
				'essay' => $this->input->post('essay',TRUE),
			);
			$this->db->insert('lol_essay',$data);
		}
		
		function add_new_user()
		{
			$data = array
			(
					'name'     =>$this->input->post('name',TRUE),
					'psw'      =>$this->input->post('psw',TRUE),
					'email'    =>$this->input->post('email',TRUE),
			);
			$this->db->insert('lol_user',$data);
		}
		
		function get_essay($slug)
		{
			$array = array('id'=>$slug);
			$query = $this->db->get_where('lol_essay',$array);
			return $query->row_array();
		}
		
		function get_essay_title()
		{
			$query= $this->db->get('lol_essay');
			if (( $query->num_rows() > 0))
			{
				$temp = 1;
				foreach (($query->result_array()) as $row):
				{
					$data['results'][$temp]['title'] = $row['title'];
					$data['results'][$temp]['id'] = $row['id'];
					$temp++;
				}
				endforeach;
				$data['num'] = $temp - 1;
			}
			return  $data;
		}
		
		function find_user()
		{
			$array = array('name'=>$this->input->post('name',TRUE));
			$query = $this->db->get_where('lol_user',$array);
			if ($query->num_rows() > 0)
			{
				return 1;
			} else
				return 0;
		}
		
		function check_user()
		{
			$query = $this->db->get_where('lol_user',array('name'=>$this->input->post('name',TRUE),'psw'=>$this->input->post('psw',TRUE)));
			if ($query->num_rows() > 0)
			{
				return 1;
			} else
				return 0;
		}
	}
?>