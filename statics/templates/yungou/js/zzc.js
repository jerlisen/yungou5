  $(function(){ 
        //不是第一次访问
		$("#pro-view-4").hide();
		$("#pro-view-3").hide();
		$(".w-msgbox-bd").hide();

	$("#whatIsThis").click(function(e){ 
		$("#pro-view-4").show();		
		$(".w-msgbox-bd").show();
		$("div").removeClass("nisdisplay");
		$("#pro-view-3").addClass("yisdisplay"); // 追加样式 
	}); 
	$(".w-msgbox-close").click(function(e){ 
		$("#pro-view-4").hide();
		$("#pro-view-3").hide();
		$(".w-msgbox-bd").hide();
	}); 
    });
