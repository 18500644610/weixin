<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{URL('/add')}}" method="post"  enctype="multipart/form-data">
	<table>
	<input type="hidden" name='_token' value="{{csrf_token()}}">
		<tr>
			<td>姓名：</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name='pwd'></td>
		</tr>
		<tr>
			<td>图片：</td>
			<td> <input type="file" name="myfile"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
		</tr>
	</table>
</form>
</body>
</html>