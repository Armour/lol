var cname1,cname2,cpwd1,cpwd2,cID,cemail,ccode;

$(document).ready(function(){
	//验证用户名 
	$("#reg_name2").keyup(function(){	
		var name = $("#reg_name2").val(); 
		cname2 = '';
		if (name.match(/^[a-zA-Z_]*/) == ''){
			$("#reg_name3").text('必须以字母或下划线开头');
			cname1 = '';
		}else if(name.length < 3){
			$('#reg_name3').text('注册名称必须大于等于3位');
			cname1 = '';
		}else{
			$('#reg_name3').text('注册名称符合标准');
			cname1 = 'yes';
		}
	});
});


$(document).ready(function(){	
	//验证密码
	$('#reg_psw2').keyup(function(){
		var psw = $("#reg_psw2").val(); 
		var psw2 = $("#reg_repsw2").val();
		
		if (psw.length < 4){
			$('#reg_psw3').text('密码长度最少需要4位');
			cpwd1 = '';
		}else if (psw.length >= 4 && psw.length < 8){
			$('#reg_psw3').text('密码符合要求。密码强度：弱');
			cpwd1 = 'yes';
		}else if ((psw.match(/^[0-9]*$/)!=null) || (psw.match(/^[a-zA-Z]*$/) != null )){
			$('#reg_psw3').text('密码符合要求。密码强度：中');
			cpwd1 = 'yes';
		}else{
			$('#reg_psw3').text('密码符合要求。密码强度：高');
			cpwd1 = 'yes';
		}
		if(psw2 != '' && psw != psw2){
			$('#reg_repsw3').text('两次密码不一致!');
			cpwd2 = '';
		}else if(psw2 != '' && psw == psw2){
			$('#reg_repsw3').text('密码输入正确');
			cpwd2 = 'yes';
		}
	});
});

$(document).ready(function(){	
	//验证确认密码
	$('#reg_repsw2').keyup(function(){
		var psw = $('#reg_psw2').val();
		var psw2 = $('#reg_repsw2').val();
		if (psw != psw2){
			$('#reg_repsw3').text('两次密码不一致!');
			cpwd2 = '';
		}else{
			$('#reg_repsw3').text('密码输入正确');
			cpwd2 = 'yes';
		}
	});	
});

$(document).ready(function(){
	//确认ID身份证
	$('#reg_IDcard2').keyup(function(){
		var idnum = $('#reg_IDcard2').val();
		if (/^(\d{15}|\d{17}[\dxX])$/.test(idnum)){
			$('#reg_IDcard3').text('身份证输入正确');	
			cID = 'yes';
		} else{
			$('#reg_IDcard3').text('身份证输入格式不正确');
			cID = '';
		}
	});
});

$(document).ready(function(){	
	//验证email
	$('#reg_email2').keyup(function(){
		var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		var email = $('#reg_email2').val();
		if(email.match(emailreg) == null){
			$('#reg_email3').text('格式错误  格式样例：xxxx@xx.com');
			cemail = '';
		}else{
			$('#reg_email3').text('输入正确');
			cemail = 'yes';	
		}
	});
});

$(document).ready(function(){	
	//验证是否可以注册
	$('#reg_submit').click(function(){
		if ((cname1 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes') && (cemail == 'yes') && (cID == 'yes'))
		{
		}	else
		{	
			alert ("必填信息未填完或填写有误！");
			return false;
		};
	});
});