(function($){
    "use strict";
    $(function(){
        var $gnb = $('.gnb');

        if($(document).width() > 480){
	        $gnb.addClass('pc-gnb');
        }
        
        var $pc_gnb = $('.pc-gnb');
        $pc_gnb.find('>ul>li>a')
        .mouseover(function(){
            $gnb.find('>ul>li>ul:visible').hide().parent('li').removeClass('on');
            $(this).next('ul:hidden').stop().fadeIn(200).parent('li').addClass('on')
        })
        .focus(function(){
            $(this).mouseover();
        })
        .end()
        .mouseleave(function(){
            $gnb.find('>ul>li>ul').hide().parent().removeClass('on')
        });

		$pc_gnb.find('>ul>li>ul>li>a')
        .mouseover(function(){
            $gnb.find('>ul>li>ul>li>ul:visible').hide().parent('li').removeClass('on');
            $(this).next('ul:hidden').stop().fadeIn(200).parent('li').addClass('on')
        })
        .focus(function(){
            $(this).mouseover();
        })
        .end()
        .mouseleave(function(){
            $gnb.find('>ul>li>ul>li>ul').hide().parent().removeClass('on')
        });
        
		$("#mobile_menu_btn").on('click', function(){
			var isOpened = $(this);
			if(isOpened.hasClass('opened')){
				$("#gnb").find(">ul").slideUp(200);
			}else{
				$("#gnb").find(">ul:not(:animated)").slideDown(200);
			}
			isOpened.toggleClass('opened');
		});
    })
})(jQuery);