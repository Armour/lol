<html>
<head>
	<script> function RefreshCode(obj){ obj.src = "http://localhost/lol/sth/graph.php?code=" + Math.random(); } </script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

	<?php 
		if (!isset($_SESSION)) session_start();
		
		if (isset($_SESSION["name"]))
		{
			$name = $_SESSION["name"];
			if ( $name != '')
				echo "<script>window.location.href='index';</script>";
		};
	?>

<form name="log_user" method="post" action="login">
<table width="400" height="150" " border="1" align="center" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
	<tr>	
		<td width="80" height="30">
			<div id="log_name" align ="right">用户名: </div>   
		</td>
		<td width="80" height="30">
			<div align="left">
				<input id="log_name2" type="text" name="name" size="35" maxlength="50">
			</div>
		</td>
	</tr>
	
	<tr>
		<td width="80" height="30">	
			<div id="log_psw" align ="right">密&nbsp;&nbsp;码: </div>
		</td>
		<td width="80" height="30">
			<div align="left">
				<input id="log_psw2" type="password" name="psw" size="35" maxlength="50">
			</div>
		</td>
	</tr>
	
	<tr>
		<td width="80" height="30">
			<div id="log_code" align ="right">验证码: </div>
		</td>
		<td width="300" height="30">
			<div  align="left">
				<input id="log_code2" type="text" name="code" size="10">
				&nbsp;&nbsp;
				<img id="log_image" src="http://localhost/lol/sth/graph.php" width="100" height="30" onclick="RefreshCode(this)"/>
			</div>
		</td>
	</tr>
	
	<tr>
 		<td width="80" height="30">
 			<div align ="right"></div>
 		</td>
 		<td width="100">
 			<div align="left">
 				<input id="log_submit" type="submit" name="submit" value="登录"/>
 				<input id="quit" type="button" name="go_register" value="注册" onClick="location.href='register'"/>
			</div>
 		</td>
 	</tr>
	 
</table>
</form>
</body>
</html>