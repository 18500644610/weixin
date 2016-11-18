<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
</head>
<body>
<a href="{{URL('index')}}"><input type="button" value="申请"></a>
   <?php if(Session::get('type')==2){?>
   	 <table border="1">
   	 	<tr>
   	 		<td>编号</td>
   	 		<td>申请人</td>
   	 		<td>申请时间</td>
   	 		<td>申请标题</td>
   	 		<td>申请内容</td>
   	 		<td>起始时间</td>
   	 		<td>结束时间</td>
   	 		<td>审核</td>
   	 	</tr>
   	 	<?php foreach($list as $v){?>
   	 	<tr>
   	 		<td><?=$v['s_id']?></td>
   	 		<td><?=$v['name']?></td>
   	 		<td><?=date('Y-m-d',$v['time']);?></td>
   	 		<td><?=$v['ti']?></td>
   	 		<td><?=$v['content']?></td>
   	 		<td><?=date('Y-m-d',$v['time1']);?></td>
   	 		<td><?=date('Y-m-d',$v['time2']);?></td>
   	 		<td><a href="{{URL('lton')}}?id={{$v['s_id']}}">通过</a>|<a href="{{URL('lbuton')}}?id={{$v['s_id']}}">不通过</a></td>
   	 	</tr>
   	 	<?php }?>
   	 </table>
   	<?php }?>
   <?php if(Session::get('type')==1){?>
   	  <table border="1">
   	 	<tr>
   	 		<td>编号</td>
   	 		<td>申请人</td>
   	 		<td>申请时间</td>
   	 		<td>申请标题</td>
   	 		<td>申请内容</td>
   	 		<td>起始时间</td>
   	 		<td>结束时间</td>
   	 		<td>审核</td>
   	 	</tr>
   	 	<?php foreach($list as $v){?>
   	 	<tr>
   	 		<td><?=$v['s_id']?></td>
   	 		<td><?=$v['name']?></td>
   	 		<td><?=date('Y-m-d',$v['time']);?></td>
   	 		<td><?=$v['ti']?></td>
   	 		<td><?=$v['content']?></td>
   	 		<td><?=date('Y-m-d',$v['time1']);?></td>
   	 		<td><?=date('Y-m-d',$v['time2']);?></td>
   	 		<td><a href="{{URL('ton')}}?id={{$v['s_id']}}">通过</a>|<a href="{{URL('buton')}}?id={{$v['s_id']}}">不通过</a></td>
   	 	</tr>
   	 	<?php }?>
   	 </table>
    <?php }?>
   <?php if(Session::get('type')==0){?>
   	 <table border=1>
   	 	<tr>
   	 		<td>申请类型</td>
   	 		<td>编号</td>
   	 		<td>申请时间</td>
   	 		<td>申请内容</td>
   	 		<td>起始时间</td>
   	 		<td>结束时间</td>
   	 		<td>审核状态</td>
   	 	</tr>
   	 	<?php foreach($list as $v){?>
   	 	<tr>
   	 		<td><?=$v['lei']?></td>
   	 		<td><?=$v['s_id']?></td>
   	 		<td><?=date('Y-m-d',$v['time']);?></td>
   	 		<td><?=$v['content']?></td>
   	 		<td><?=date('Y-m-d',$v['time1']);?></td>
   	 		<td><?=date('Y-m-d',$v['time2']);?></td>
   	 		<td><?php if($v['type']==0){
              echo '未审核';
            }else if($v['type']==1){
              echo '审核中';
            }else{
              echo '已审核';
            } 
   	 		?></td>
   	 	</tr>
   	 	<?php }?>
   	 </table>
   	<?php }?>
</body>
</html>