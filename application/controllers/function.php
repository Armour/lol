<?php
	function hashit($c,$a) 
	{
		$salt="GC_ZXCVBN".$c;  	
		$b=$a.$salt;  		
		$b=md5($b);  		
		return $b;  			
	}
?>