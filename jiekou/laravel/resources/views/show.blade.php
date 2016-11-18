<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="2">
	 <a href="{{URL('/insert')}}"><input type="button" value="插入数据"></a>
		<tr>
			<td><input type="checkbox" id="all"></td>
			<td>商品名称</td>
			<td>价格</td>
			<td>操作</td>
		</tr>
		<?php foreach ($shop as $value) {?>
		<tr id="ll<?=$value['id']?>">
			<td><input type="checkbox" name="subBox" value="<?=$value['id']?>"></td>
			<td><?=$value['sname']?></td>
			<td value="<?=$value['id']?>"><span class="price"><?=$value['price']?></span></td>
			<td><a href="javascript:void(0)" class="del" id="<?=$value['id']?>">删除</a></td>
		</tr>
		<?php }?>
		<input type="button" value="批量删除" id='p'>
	</table>
 {!! $shop->render() !!}
	<input type="hidden" name='_token' id='_csrf' value="{{csrf_token()}}">
</body>
</html>
<script src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
	$(function(){
	 $('.del').click(function(){
	   var id=$(this).attr('id');
       //alert(id);
	   var r=$('#_csrf').val(); 
	   $.ajax({  
            type:'POST',  
            url:'{{URL('/del')}}',  
            data:{ 
                _token:r, 
                id:id,   
            },  
            success:function(msg){  
                if(msg){  
                 $('#ll'+msg).remove();
                }	
	 }
	})
	}); 

	 $("#all").click(function(){    
    if(this.checked){  
         $(":checkbox").prop("checked",true);  
    }else{    
        $(":checkbox").attr("checked", false); 
    }    
    });
     $(document).on('click','span',function(){  
         old_val=$(this).html();  
        $(this).parent().html("<input type=\'text\' class='ss' value="+old_val+">");  
        $('.ss').focus();  
    })  
  
    $(document).on('blur','.ss',function(){  
        var obj=$(this);
        var r=$('#_csrf').val(); 
        var id=$(this).parent().attr('value'); //获取要修改内容的id
        var val=$(this).val(); //获取修改后的值 
        $.ajax({  
            type:'POST',  
            url:'{{URL('/upload')}}',  
            data:{ 
                _token:r, 
                id:id,  
                val:val  
            },  
            success:function(msg){  
                if(msg == 1){  
                    obj.parent().html("<span class='price'>"+val+"</span>")  
                }else{  
                    obj.parent().html("<span class='price'>"+old_val+"</span>")  
                }  
  
            }  
        })  
    })
    $("#p").click(function() {
		// 判断是否至少选择一项
		var checkedNum = $("input[name='subBox']:checked").length;
		if(checkedNum == 0) {
		alert("请选择至少一项！");
		return;
	}
    // 批量选择
    if(confirm("确定要删除所选项目？")) {
    var checkedList = new Array();
    var r=$('#_csrf').val(); 
    $("input[name='subBox']:checked").each(function() {
    checkedList.push($(this).val());
    });
    $.ajax({  
            type:'POST',  
            url:'{{URL('/dd')}}',  
            data:{ 
                _token:r,   
                id:checkedList.toString()  
            },
            dataType:'json',  
            success:function(msg){
            var count=msg.length;
            for(var i=0;i<count;i++){
             $('#ll'+msg[i]).remove();   
         }        
            }  
        }) 
    }
    })

	})
</script>
