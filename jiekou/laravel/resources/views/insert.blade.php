<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="{{URL('/a')}}" method="post">
<input type="hidden" name='_token' value="{{csrf_token()}}">
	<table>
	<tbody id="test">
		<tr>
			<td>商品名称：<input type="text" name="sname[]"></td>
			<td>商品价格：<input type="text" name="price[]"></td>
		</tr>
	</tbody>
		<tr>
		<td><input type="submit" value="提交"></td>
		</tr>
	</table>
	<input type="button" value="+" id="btn1">
</form>
</body>
</html>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
     $("#btn1").click(function(){
        $("#test").append('<tr><td>商品名称：<input type="text" name="sname[]"></td><td>商品价格：<input type="text" name="price[]"></td></tr>');
    });
</script>