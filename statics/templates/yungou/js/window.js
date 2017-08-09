//弹窗口
function show(file,width,height)
{	

	$("#window").empty().remove();
	$("body").append('<div id="window"><div id="float_window"><iframe src="'+file+'" style="width:'+width+';height:'+height+';background-color:transparent;overflow:hidden;" scrolling="no" frameborder="0" allowtransparency="true" id="popupFrame" name="popupFrame" width="100%" height="100%"></iframe><span class="close" onclick="closewindow()"></span></div></div>')
	$("#window").show();
	$("#float_window").css("width",width)
	
	$("#float_window").css("height",height)
	$("#window").css("height",$(window).height())
	$("#float_window").css("margin-left","-"+parseInt(width/2)+"px")
	$("#float_window").css("margin-top","-"+parseInt(height/2)+"px")
	$(window).scroll()

}
//关闭窗口
function closewindow()
{$("#window").empty().remove();}

//滚动滚动条时，
$(window).scroll( function() {
						   
				if ($("body").find("#window").is("div"))		   
				{var tops=$(window).scrollTop();
				 $("#window").css("top",tops+"px");
				}
				
 } );
//调整窗口
$(window).resize(function(){
				if ($("body").find("#window").is("div"))		   
				{
					var height=$(window).height();
					$("#window").css("height",height);
				}
});