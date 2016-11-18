<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>申请</title>
</head>
<body>
<h3>欢迎<?=Session::get('name');?>登录</h3>
<form action="{{URL('insert')}}" method="post">
<input type="hidden" name="_token" value="<?=csrf_token();?>">
	<table border=1>
		<tr>
			<td>申请标题:</td>
			<td><input type="text" name='ti'></td>
		</tr>
		<tr>
			<td>申请类型：</td>
			<td><input type="radio" name='lei' value="请假">请假<input type="radio" name='lei' value="调休">调休</td>
		</tr>
		<tr>
			<td>开始时间：</td>
			<td><input type="text" name='time1'></td>
		</tr>
		<tr>
			<td>结束时间：</td>
			<td><input type="text" name='time2'></td>
		</tr>
		<tr>
			<td>申请理由：</td>
			<td><textarea name="content" rows="5" cols="10"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
			<td><input type="reset" value="重置"></td>
		</tr>
	</table>
</form>
</body>
</html>