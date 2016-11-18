<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script type="text/javascript" src="http://open.51094.com/user/myscript/157f849959aefa.html "></script>
<body>
	<form action="{{URL('/jingindex')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name='uname'></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name='pwd'></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
			<tr>
				<td>其他登录方式：</td>
				<td><span id="hzy_fast_login"></span></td>
			</tr>
		</table>
	</form>
</body>
</html>