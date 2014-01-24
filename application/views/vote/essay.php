<?php 
	echo form_open('vote/add_essay');
	
	$data = array(
		'name' => 'title',
		'id' => 'title',
		'maxlength' => '100',
		'size' => '40',
	);
	echo form_input($data);
	
	$data = array(
			'name' => 'essay',
			'id' => 'essay',
			'cols' => '39',
			'rows' => '20',
	);
	echo form_textarea($data);
	
	echo form_submit('submit', 'Submit~');
?>