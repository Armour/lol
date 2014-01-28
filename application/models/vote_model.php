<?php 
	class Vote_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
	    function skin_add_new_skin()
		{
			$data = array
			(
				'skin_name'=>$this->input->post('skin_name',TRUE),
				'skin_designer'=>$this->input->post('skin_designer',TRUE),
				'skin_vote_number'=>$this->input->post('skin_vote_number',TRUE),
			);
			$this->db->insert('lol_skin',$data);
		}
		
	    function skin_vote_this_one($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('skin_id'=>$id);
				$query = $this->db->get_where('lol_skin',$array);	
				if ($query->num_row()>0)
				{
					$row = $query->row_array();
					$data = array
					(
							'skin_vote_number'=>$row['skin_vote_number']+1,
					);
					$this->db->where('skin_id',$id);
					$this->db->update('lol_skin',$data);
				}	else
				{		
				}
			} 
		}
		
		function skin_show_this_one($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('skin_id'=>$id);
				$query = $this->db->get_where('lol_skin',$array);
				if ($query->num_row()>0)
				{
					$data = $query->row_array();
					return $data;
				}	else
				{
				}
			}
		}
		
		function skin_get_id($name = '',$designer='')
		{	
			$array = array('skin_name'=>$name,'skin_designer'=>$designer);
			$query = $this->db->get_where('lol_skin',$array);
			$row = $query->row_array();
			return $row['skin_id'];
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