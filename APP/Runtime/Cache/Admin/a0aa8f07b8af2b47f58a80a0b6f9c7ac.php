<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="__ROOT__/APP/Tpl/Public/Css/login.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="__ROOT__/APP/Tpl/Public/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		var Url='<?php echo U("Admin/Login/verify",'','');?>';
	</script>
		<script type="text/javascript" src="__ROOT__/APP/Tpl/Public/Js/login.js"></script>
	</head>
	<body>

		<div class="login">	
			<form action="<?php echo U("Admin/Login/login",'','');?>" method="post" id="login">
			<div class="title">
				 登录后台
			</div>
			<table border="1" width="100%">
				<tr>
					<th>管理员帐号:</th>
					<td>
						<input type="username" name="username" class="len250"/>
					</td>
				</tr>
				<tr>
					<th>密码:</th>
					<td>
						<input type="password" class="len250" name="password"/>
					</td>
				</tr>
				<tr>
					<th>验证码:</th>
					<td>
						<input type="code" class="len250" name="code"/> <a href="javascript:void(change_code(this));"><img src="<?php echo U("Admin/Login/verify"),'','';?>" id="code"/> </a>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>