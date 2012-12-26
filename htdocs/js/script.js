$(document).ready(function(){
	setTimeout(function(){ 
		$("div#succeed_message").hide();
	}, 12000 );

	$("#page_home").fadeIn(1000);
	
	$(function () { // preload nivoslider images
		$('#slider img')
		.addClass('loading')
		.load(function () {
			$('#slider img').removeClass('loading');
			if($('img.loading').size()>0)
				return;
            $('#preloader').delay(250).fadeOut('slow'); // hide loaders after loading images
			$('.hero-unit #slider').delay(250).fadeIn('slow');
			
        }).error(function () {
            // notify the user that the image could not be loaded
        })
    });
	
	$('#slider').nivoSlider({
        effect:"fade",
        animSpeed:500,
        pauseTime:3000,
        startSlide:0,
        directionNav:true,
        controlNav:true,
        controlNavThumbs:false,
        pauseOnHover:true,
        manualAdvance:false
    });
	
	$("#order_web_maintenance").click(function(){
		$("#product_select").val("Web Maintenance");
		var jump = $(this).attr('href');
		var new_position = $('#'+jump).offset();
		window.scrollTo(new_position.left,new_position.top-100);
		return false;
	});
	
	$("#order_web_design_and_development").click(function(){
		$("#product_select").val("Web Design and Development");
		var jump = $(this).attr('href');
		var new_position = $('#'+jump).offset();
		window.scrollTo(new_position.left,new_position.top-100);
		return false;
	});
	
	$("#order_facebook_direct_marketing_apps").click(function(){
		$("#product_select").val("Facebook Direct Marketing Apps");
		var jump = $(this).attr('href');
		var new_position = $('#'+jump).offset();
		window.scrollTo(new_position.left,new_position.top-100);
		return false;
	});
	
	$("#order_advertising").click(function(){
		$("#product_select").val("Advertising");
		var jump = $(this).attr('href');
		var new_position = $('#'+jump).offset();
		window.scrollTo(new_position.left,new_position.top-100);
		return false;
	});

	$('.showhide a').click(function(){
		if($(this).parent().hasClass('active')==false){
			$('.showhide').removeClass('active');
			$(this).parent().addClass('active');
		}
		var jump = $(this).attr('href');
		var new_position = $('#'+jump).offset();
		window.scrollTo(new_position.left,new_position.top-100);
		return false;
	});
	
	$(".lazy").lazyload({
		effect : "fadeIn"
    });
	
	$('#scroll_top').click(function(){
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	});
		
	/*$("#computers1").retinaeffect({effect: '#retina_computers1',left: 110, top: 170});
	$("#computers2").retinaeffect({effect: '#retina_computers2',left:350, top: 35});
	$("#computers3").retinaeffect({effect: '#retina_computers3',left:35, top: 35});
	$("#computers4").retinaeffect({effect: '#retina_computers4',left:25, top: 25});
	$("#computers5").retinaeffect({effect: '#retina_computers5',left:45, top: 25});*/
});
