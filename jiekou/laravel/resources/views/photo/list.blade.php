<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>名字</td>
			<td>图片</td>
		</tr>
	<?php foreach ($res as $value) {?>
		<tr>
			<td>{{$value['name']}}</td>
			<td><img src="{{$value['file']}}"></td>
		</tr>
	<?php }?>
	</table>
</body>
</html>