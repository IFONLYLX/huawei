// JavaScript Document
$(function () {

    $(window).scroll(function (event) {
        /* Act on the event */
        if ($(this).scrollTop() == 0) {
            $("#nav-main").show();
        }
        if ($(this).scrollTop() != 0) {
            $("#nav-main").hide();
        }
    });

});
<!--浮动广告界面-->
$(function () {
    $(".newpic").hover(function () {

        $("#newsmain").stop(true, true).css("margin-left", "0px");

    }, function () {


    })
    $("#newsmain").hover(function () {

    }, function () {

        $("#newsmain").stop(true, true).css("margin-left", "-50px")
    })


});

$(function () {
    $(" #dropdowns").bind("click", function () {
        var $u = $(".dropdown-menus");
        $("#dropdowns .glyphicon").toggleClass('glyphicon-triangle-right');
        if ($u.is(":hidden")) {
            $(".dropdown-menus").slideDown("slow");
            

        }
        else {
            $(".dropdown-menus").slideUp("slow");
            
        }

    })


});


<!--返回顶部-->
$(function ($) {
    if ($("meta[name=toTop]").attr("content") == "true") {
        if ($(this).scrollTop() == 0) {
            $("#toTop").hide();

        }
        $(window).scroll(function (event) {
            /* Act on the event */
            if ($(this).scrollTop() == 0) {
                $("#toTop").hide();

            }
            if ($(this).scrollTop() != 0) {
                $("#toTop").show();


            }
        });
        $("#toTop").click(function (event) {
            /* Act on the event */
            $("html,body").animate({
                scrollTop: "0px"
            },
            666
            )
        });
    }
});

<!--导航显示隐藏事件-->
$(function () {
  $(".dropdown-list li").bind("mouseover", function () {
      var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      if(browserWidth>1050)
      {
        var $i = $(this).index();
        $(".dropmenu-down .dropmenu").eq($i).stop(true, true).slideDown("2000").siblings("div").hide();

    }
    
    
});
  
  $(".dropdown-list li:nth-child(6)").bind("mouseover", function () {
    $(".dropmenu-down .dropmenu").stop(true, true).slideDown("2000").siblings("div").hide();

});
  $(".dropdown-list li:nth-child(7)").bind("mouseover", function () {
    $(".dropmenu-down .dropmenu").stop(true, true).slideDown("2000").siblings("div").hide();

});

});

$(function () {
    $(".drop-toggle").hover(function () {
    }, function () {


        $(".dropmenu-down .dropmenu").stop(true, true).slideUp("slow");

    });

});

/*$(function () {
	var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if(browserWidth>1050)
	{
	
	}
	 $(".dropdown-list li").bind("mouseover", function () {
        var $i = $(this).index();
        $(".dropmenu-down .dropmenu").eq($i).stop(true, true).slideDown("2000").siblings("div").hide();

    });
  	$(".dropdown-list li:nth-child(6)").bind("mouseover", function () {
        $(".dropmenu-down .dropmenu").stop(true, true).slideDown("2000").siblings("div").hide();

    });
	$(".dropdown-list li:nth-child(7)").bind("mouseover", function () {
        $(".dropmenu-down .dropmenu").stop(true, true).slideDown("2000").siblings("div").hide();

    });

});*/