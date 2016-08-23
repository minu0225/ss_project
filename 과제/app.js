        function blog()
        {
            $('#login_table').css('top','0');
        };
        
        var b = $(".panel-body").height();
        $(".panel-body").css("height","200px");
        $(".panel-body").css("overflow-y","hidden");

        var a=0;
        $(".panel-footer > .btn-more").on("click",function(){
            if(a==0){
                $(".panel-body").css("height",b);
                var btn = "<span class='glyphicon glyphicon-chevron-up'></span>접기";
                a=1;
                        $(".panel-body").css("transition","0.5s");
            }
            else{
                $(".panel-body").css("height","200px");
                var btn = "<span class='glyphicon glyphicon-chevron-down'></span>더보기";
                a=0;
            }
            $(".btn-more").html(btn);
        });