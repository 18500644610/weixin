 function json(url,data='')
 {
 	var str="";
 	$.ajax({
 		type:'get',
 		url:'http://www.laravel.com/'+url,
 		dataType:'jsonp',
 		data : data,
 		// async:'false',
 		jsonp:"callback",
 	
 		 jsonpCallback:"success_jsonpCallback",
 		sussess : function(msg)
 		{
 			str=msg;
 		},
 		error : function()
 		{
 			alert("fail");
 		},
 	});
 	return str;
 };


