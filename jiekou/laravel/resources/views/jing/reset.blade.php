<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{URL('/jingreset')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>
			<tr>
				<td>请输入新密码：</td>
				<td><input type="password" name='pwd'></td>
			</tr>
			<tr>
				<td>确入新密码：</td>
				<td><input type="password" name='pwd1'></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>