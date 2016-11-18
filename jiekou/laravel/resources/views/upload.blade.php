<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
</head>
<body>
<form action="{{URL('/xiu')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="id" value="<?=$id?>">
	<table>
		<tr>
			<td>请输入新密码：</td>
			<td><input type="password" name='pwd'></td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td><input type="password" name='pwd'></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>