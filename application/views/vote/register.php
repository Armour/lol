<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="http://localhost/lol/sth/register_check.js"></script>
	<script> function RefreshCode(obj){ obj.src = "http://localhost/lol/sth/graph.php?code=" + Math.random(); } </script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<form name="reg_user" method="post" action="register">
<table width="800" height="270" border="1" align="center" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
	<tr>
		<td width=10% height="30">
			<div id="reg_name" align ="right">用户名: </div>
		</td>
		<td width=50% height="30">
			<div align="left">&nbsp; 
				<input id="reg_name2" type="text" name="name" size="50" maxlength="50">
			</div>
		</td>
		<td width=30% height="30" id="reg_name3">&nbsp; </td>
	</tr>
	
	<tr>
		<td height="30">
			<div id="reg_psw" align ="right">注册密码: </div>
		</td>
		<td height="30">
			<div align="left">&nbsp;
				<input id="reg_psw2" type="password" name="psw" size="50" maxlength="50">
			</div>
		</td>
		<td height="30" id="reg_psw3">&nbsp; </td>
	</tr>
	
	<tr>
		<td height="30">
			<div id="reg_repsw" align ="right">确认密码: </div>
		</td>
		<td height="30">
			<div align="left">&nbsp;
				<input id="reg_repsw2" type="password" name="repsw" size="50" maxlength="50">
			</div>	
		</td>
		<td height="30" id="reg_repsw3">&nbsp; </td>
	</tr>
	
	<tr>
		<td height="30">
			<div id="reg_email" align="right">E-mail: </div>
		</td>
		<td height="30">
			<div align="left">&nbsp;
				<input id="reg_email2" type="text" name="email" size="50"  maxlength="50">	
			</div>
		</td>
		<td height="30" id="reg_email3">&nbsp; </td>
	</tr>
	
	<tr>
		<td height="30">
			<div id="reg_code" align ="right">验证码: </div>
		</td>
		<td height="30">
			<div  align="left">&nbsp;
				<input id="reg_code2" type="text" name="code" size="10">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img id="reg_image" src="http://localhost/CI/sth/graph.php" width="100" height="30" onclick="RefreshCode(this)" />
				看不清? 单击图片刷新
			</div>
		</td>
		<td height="30" id="reg_code3">&nbsp; </td>
	</tr>
	
 	<tr>
 		<td width="100" height="30">
 			<div align ="right"></div>
 		</td>
 		<td width="100">
 			<div align="left">
 				&nbsp;&nbsp;
 				<input id="reg_submit" type="submit" name="submit" value="提交"/>
 				<input id="to_login" type="button" name="go_login" value="登录" onClick="location.href='login'"/>
			</div>
 		</td>
		<td height="30"> &nbsp; </td>
 	</tr>
 	

</table>
</form>
</body>
</html>