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
				'skin_file_location'=>"/static/skin_cover/$this->input->post('save_skin_cover_name',TRUE).jpg"
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
					'voice_file_location'=>"/static/voice_cover/$this->input->post('save_voive_cover_name',TRUE).jpg"
			);
			$this->db->insert('lol_voice',$data);
		}
		
	    function skin_vote_this_one($id = -1)
		{
			if (!is_numeric($id)) $id = -1;
			if ($id!=-1) {
				$array = array('skin_id'=>$id);
				$query = $this->db->get_where('lol_skin',$array);	
				if ($query->num_rows()>0)
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
		
		function voice_vote_this_one($id = -1)
		{
			if (!is_numeric($id)) $id = -1;
			if ($id!=-1) {
				$array = array('voice_id'=>$id);
				$query = $this->db->get_where('lol_voice',$array);
				if ($query->num_rows()>0)
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
		
		function skin_get_number()
		{
			$query = $this->db->get('lol_skin');
			return $query->num_rows();
		}
		
		function voice_get_number()
		{
			$query = $this->db->get('lol_voice');
			return $query->num_rows();
		}
		
		function skin_get_this_one_in_all($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('skin_id'=>$id);
				$query = $this->db->get_where('lol_skin',$array);
				if ($query->num_row()>0)
				{
					$data = $query->row_array();
				}	else
				{
					$data['skin_name'] = '暂缺';
					$data['skin_designer'] = '暂缺';
					$data['skin_vote_number'] = '暂缺';
					$data['skin_file_location'] = 'default.jpg';
				}
				return $data;
			}
		}
		
		function voice_get_this_one_in_all($id = 0)
		{
			if (!is_numeric($id)) $id = 0;
			if (id!=0) {
				$array = array('voice_id'=>$id);
				$query = $this->db->get_where('lol_voice',$array);
				if ($query->num_row()>0)
				{
					$data = $query->row_array();
				}	else
				{	
					$data['voice_name'] = '暂缺';
					$data['voice_designer'] = '暂缺';
					$data['voice_vote_number'] = '暂缺';
					$data['voice_file_location'] = 'default.jpg';
				}
				return $data;
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
		
		function skin_get_former_skin($rank = 0)
		{
			$this->db->select('skin_id,skin_name,skin_designer,skin_vote_number,skin_file_location')->from('lol_skin')->order_by('skin_vote_number','desc')->limit(3);
			$query = $this->db->get();
			if ( $rank != 0)
			{
				switch ($query->num_rows())
				{
					case 1: 
						$row =$query->row_array(0);
						$row['skin_rank'] = '是第一名呢！';
							return $row;
						break;
						
					case 2: 
						$row[1] = $query->row_array(0);
						$row[2] = $query->row_array(1);
						if ($row[1]['skin_vote_number'] == $row[2]['skin_vote_number'])
						{
							$row[1]['skin_rank'] = '是第一名呢！';
							$row[2]['skin_rank'] = '是第一名呢！';
						}	
							else 
						{
							$row[1]['skin_rank'] = '是第一名呢！';
							$row[2]['skin_rank'] = '迎头赶上！';
						}
							return $row[$rank];
						break;
						
					case 3: 
						$row[1] = $query->row_array(0);
						$row[2] = $query->row_array(1);
						$row[3] = $query->row_array(2);
						if ($row[1]['skin_vote_number'] == $row[2]['skin_vote_number'])
						{
							if ($row[2]['skin_vote_number'] == $row[3]['skin_vote_number'])
							{
								$row[1]['skin_rank'] = '是第一名呢！';
								$row[2]['skin_rank'] = '是第一名呢！';
								$row[3]['skin_rank'] = '是第一名呢！';
							}	
								else 
							{
								$row[1]['skin_rank'] = '是第一名呢！';
								$row[2]['skin_rank'] = '是第一名呢！';
								$row[3]['skin_rank'] = '迎头赶上！';
							}
						}
						else
						{
							if ($row[2]['skin_vote_number'] == $row[3]['skin_vote_number'])
							{
								$row[1]['skin_rank'] = '是第一名呢！';
								$row[2]['skin_rank'] = '迎头赶上！';
								$row[3]['skin_rank'] = '迎头赶上！';
							}	
								else 
							{
								$row[1]['skin_rank'] = '是第一名呢！';
								$row[2]['skin_rank'] = '迎头赶上！';
								$row[3]['skin_rank'] = '只差一点！';
							}
						}
							return $row[$rank];
						break;
						
					default:
						$row['skin_name'] = '暂缺';
						$row['skin_designer'] = '暂缺';
						$row['skin_vote_number'] = '暂缺';
						$row['skin_file_location'] = 'default.jpg';
						$row['skin_rank'] = '暂缺';
						return $row;
				}
			}
		}
		
		function voice_get_former_voice($rank = 0)
		{
			$this->db->select('voice_id,voice_name,voice_designer,voice_vote_number,voice_file_location')->from('lol_voice')->order_by('voice_vote_number','desc')->limit(3);
			$query = $this->db->get();
			if ( $rank != 0)
			{
				switch ($query->num_rows())
				{
					case 1:
						$row =$query->row_array(0);
						$row['voice_rank'] = '是第一名呢！';
						return $row;
						break;
		
					case 2:
						$row[1] = $query->row_array(0);
						$row[2] = $query->row_array(1);
						if ($row[1]['voice_vote_number'] == $row[2]['voice_vote_number'])
						{
							$row[1]['voice_rank'] = '是第一名呢！';
							$row[2]['voice_rank'] = '是第一名呢！';
						}
						else
						{
							$row[1]['voice_rank'] = '是第一名呢！';
							$row[2]['voice_rank'] = '迎头赶上！';
						}
						return $row[$rank];
						break;
		
					case 3:
						$row[1] = $query->row_array(0);
						$row[2] = $query->row_array(1);
						$row[3] = $query->row_array(2);
						if ($row[1]['voice_vote_number'] == $row[2]['voice_vote_number'])
						{
							if ($row[2]['voice_vote_number'] == $row[3]['voice_vote_number'])
							{
								$row[1]['voice_rank'] = '是第一名呢！';
								$row[2]['voice_rank'] = '是第一名呢！';
								$row[3]['voice_rank'] = '是第一名呢！';
							}
							else
							{
								$row[1]['voice_rank'] = '是第一名呢！';
								$row[2]['voice_rank'] = '是第一名呢！';
								$row[3]['voice_rank'] = '迎头赶上！';
							}
						}
						else
						{
							if ($row[2]['voice_vote_number'] == $row[3]['voice_vote_number'])
							{
								$row[1]['voice_rank'] = '是第一名呢！';
								$row[2]['voice_rank'] = '迎头赶上！';
								$row[3]['voice_rank'] = '迎头赶上！';
							}
							else
							{
								$row[1]['voice_rank'] = '是第一名呢！';
								$row[2]['voice_rank'] = '迎头赶上！';
								$row[3]['voice_rank'] = '只差一点！';
							}
						}
						return $row[$rank];
						break;
		
					default:
						$row['voice_name'] = '暂缺';
						$row['voice_designer'] = '暂缺';
						$row['voice_vote_number'] = '暂缺';
						$row['voice_file_location'] = 'default.jpg';
						$row['voice_rank'] = '暂缺';
						return $row;
				}
			}
		}
		}
?>