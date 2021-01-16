// <![CDATA[
$(function() {
	
//$('.content_box,.centercol,.btn a span').css({"border-radius":"5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});
//$('.col1,.col2,.col3,.col4').css({"-webkit-box-shadow": "0px 1px 3px #e8e8e8", "-moz-box-shadow":"0px 1px 3px #e8e8e8", "box-shadow":"0px 1px 3px #e8e8e8"});


/*
$('#contactform input,#contactform textarea').css({"border-radius":"4px", "-moz-border-radius":"4px", "-webkit-border-radius":"4px"});
*/

});	





$(function () {
	
	var arr_links = location.href.split('/');
	var length = arr_links.length;
	$('.menu li').each(function () {
		if ($(this).children('a').attr('href') == arr_links[(length-1)]) {
			$(this).addClass('active');
			$(this).children('a').addClass('active');
			$(this).parents('li').addClass('active');
			$(this).parents('li').children('a').addClass('active');
		}
	})
	
	$(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			social_tools: false,
		});
	});



	$().UItoTop();
	
    $("#ticker").tweet({
        username: "twitter", // define your twitter username
        page: 1,
        avatar_size: 16, // avatar size in px
        count: 20, // how many tweets to show
        loading_text: "loading ..."
    }).bind("loaded", function () {
        var ul = $(this).find(".tweet_list");
        var ticker = function () {
                setTimeout(function () {
                    ul.find('li:first').animate({
                        marginTop: '-4em'
                    }, 500, function () {
                        $(this).detach().appendTo(ul).removeAttr('style');
                    });
                    ticker();
                }, 8000); // duration before next tick (4000 = 4 secs)
            };
        ticker();
    });

	$('#contactform_main').submit(function(){				  
		var action = $(this).attr('action');
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			company: $('#url').val(),
			subject: $('#subject').val(),
			message: $('#message').val()
		},
			function(data){
				$('#contactform_main #submit').attr('disabled','');
				$('.response').remove();
				$('#contactform_main').before('<p class="response">'+data+'</p>');
				$('.response').slideDown();
				if(data=='Message sent!') $('#contactform_main').slideUp();
			}
		); 
		return false;
	});



});
// ]]>
