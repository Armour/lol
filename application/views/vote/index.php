<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script src=""></script>
</head>
<body>
	<p><?php echo anchor('vote/add_essay','ADD ESSAY') ?></p>
	
	<h2><a href="vote/register"> 注册 </a></h2>
	<p>
	<h2><a href="vote/login"> 登录 </a></h2>
	</p>
	<?php 	
		for ($i=1; $i<=$num; $i++) 
		{
	?>
	
		<h3><?=$results[$i]['title'] ?></h3>	
		<p><?php echo anchor('vote/show_essay/'.$results[$i]['id'],'Click to see all') ?></p>
		<hr>
	
	<?php
		}
	?>
	
</body>
</html>

