<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>绑定用户</title>
</head>
<body>
	<!-- 	157f849959aefa
	bc2292eed2bb44cc42064d990179e11f -->
<form action="{{URL('/qq')}}" method="post">
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
    		<td><input type="submit" value="完成"></td>
    		<td><a href="{{URL('/edit')}}">直接登录</a></td>
    	</tr>
    </table>
</form>
</body>
</html>