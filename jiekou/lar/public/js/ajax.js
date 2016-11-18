$(function(){
 $.fn.webx = function(url,j){
//	 alert(data);
//	 return false;
    $.ajax({
    type : "post",
    url : 'http://www.laravel.com/'+url,
    dataType : j,
   jsonp: "callback",//传递给请求处理程序或页 面的，用以获得jsonp回调函数名的参数名(默认为:callback)
   jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
   success : function(json){
    return json;
   },
    error:function(){
        alert('fail');
   }
   });
 };
})