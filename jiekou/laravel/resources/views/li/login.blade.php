<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="{{URL('/login1')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
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
				<td><input type="submit" value="登录"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>