function blog()
        {
            $('#login_table').css('top','0');
        }
	
	var wi = screen.availWidth;
	var he = screen.availHeight-61;
	$(".body").css("width",wi);
	$(".body").css("height",he);
	$("#wrap1").css("width",wi);
	$("#wrap1").css("height",he);
	$("#login_table").css("height",he*3);
	$("#wrap1").css("overflow","hidden");

        $(".blog_body").css("overflow-y","hidden");
	$(".blog_body").css("display","none");
	$(".blog_body:first").css("display","block");
	$(".blog_head:first").css("background-color","#727272");
     
	

        $(".blog_head").on("click",function(){

	 var s = $(this).parents().children();

	 if( $(s[1]).css("display")== 'none' )
	{	
		var s1 = $(this);
		$(s[1]).css("display","block");
		$(s1).css("background-color","#727272");
		console.log(21322);
	}
	 else if( $(s[1]).css("display")== 'block' )
	{
		var s1 = $(this);
                $(s[1]).css("display","none");
                $(s1).css("background-color","#A6A6A6");
		console.log(444442);
	}
	
        
        });