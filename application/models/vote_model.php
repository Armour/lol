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
	
		function voice_add_new_voice()
		{
			$data = array
			(
					'voice_name'=>$this->input->post('voice_name',TRUE),
					'voice_designer'=>$this->input->post('voice_designer',TRUE),
					'voice_vote_number'=>$this->input->post('voice_vote_number',TRUE),
			);
			$this->db->insert('lol_voice',$data);
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
		
		function voice_vote_this_one($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('voice_id'=>$id);
				$query = $this->db->get_where('lol_voice',$array);
				if ($query->num_row()>0)
				{
					$row = $query->row_array();
					$data = array
					(
							'voice_vote_number'=>$row['voice_vote_number']+1,
					);
					$this->db->where('voice_id',$id);
					$this->db->update('lol_voice',$data);
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
		
		function voice_show_this_one($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('voice_id'=>$id);
				$query = $this->db->get_where('lol_voice',$array);
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
		
		function voice_get_id($name = '',$designer='')
		{
			$array = array('voice_name'=>$name,'voice_designer'=>$designer);
			$query = $this->db->get_where('lol_voice',$array);
			$row = $query->row_array();
			return $row['voice_id'];
		}
		
		function skin_get_first_skin()
		{		
		}
		
		function skin_get_second_skin()
		{		
		}
		
		function skin_get_third_skin()
		{		
		}
		
		function voice_get_first_voice()
		{
		}
		
		function voice_get_second_voice()
		{
		}
		
		function voice_get_third_voice()
		{
		}
	}
?>