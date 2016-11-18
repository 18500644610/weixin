<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{URL('/index')}}" method="post">
<input type="hidden" name='_token' value="{{csrf_token()}}">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
</body>
</html>