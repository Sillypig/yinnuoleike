$(document).ready(function(){
	setTimeout(function(){ 
		$("div#succeed_message").hide();
	}, 12000 );
	
	$(".sidebar-nav").fadeIn(3000);
	$("#page_home").fadeIn(3000);
			
	$(function () { // preload all images
		$('img')
		.addClass('loading')
		.load(function () {
			$('img').removeClass('loading');
			if($('img.loading').size()>0)
				return;
            $('#preloader').delay(250).fadeOut('slow'); // hide loaders after loading images
			$('.hero-unit #slider').delay(250).fadeIn('slow');
			
        }).error(function () {
            // notify the user that the image could not be loaded
        })
    });
	
	$('#slider').nivoSlider({
        effect:"random",
        slices:15,
        boxCols:8,
        boxRows:4,
        animSpeed:500,
        pauseTime:3000,
        startSlide:0,
        directionNav:true,
        controlNav:true,
        controlNavThumbs:false,
        pauseOnHover:true,
        manualAdvance:false
    });
	
	$(".sidebar-nav").mouseout(function(){
      $(this).removeClass("sidebar-nav-mousedown-effect");
    }).mouseup(function(){
      $(this).removeClass("sidebar-nav-mousedown-effect");
    }).mousedown(function(){
      $(this).addClass("sidebar-nav-mousedown-effect");
    });
	
	$("#order_starter").on('click', function(e){ // activate starter order form
		$("#product_select").val("Jippostore f-Commerce");
		$("div.span3 .showhide:eq(1)").removeClass('active');
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});
		$("div.span3 .showhide:eq(3)").addClass('active');
		$("#page_orderForm").css({
			'visibility':'visible',
			'height':'auto'
		}).fadeIn('500');
		
		$(window).scrollTop($('#brand').position().top);
		e.preventDefault();
	});
	
	$("#order_branded").on('click', function(e){ // activate branded order form
		$("#product_select").val("Jippostore f-Commerce Branded");
		$("div.span3 .showhide:eq(1)").removeClass('active');
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});
		$("div.span3 .showhide:eq(3)").addClass('active');
		$("#page_orderForm").css({
			'visibility':'visible',
			'height':'auto'
		}).fadeIn('500');
		
		$(window).scrollTop($('#brand').position().top);
		e.preventDefault();
	});
	
	$("#order_custom").on('click', function(e){ // activate custom order form
		$("#product_select").val("Jippostore f-Commerce Custom");
		$("div.span3 .showhide:eq(1)").removeClass('active');
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});
		$("div.span3 .showhide:eq(3)").addClass('active');
		$("#page_orderForm").css({
			'visibility':'visible',
			'height':'auto'
		}).fadeIn('500');
		
		$(window).scrollTop($('#brand').position().top);
		e.preventDefault();
	});
	
	$("#order_dm").on('click', function(e){ // activate dm order form
		$("#product_select").val("Jippostore f-Commerce DM");
		$("div.span3 .showhide:eq(1)").removeClass('active');
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});
		$("div.span3 .showhide:eq(3)").addClass('active');
		$("#page_orderForm").css({
			'visibility':'visible',
			'height':'auto'
		}).fadeIn('500');
		
		$(window).scrollTop($('#brand').position().top);
		e.preventDefault();
	});

	
	$(".nav").find("li").not(".showhide").find("a").hover(
		function() {
			$(this).animate({"color": "#FFFFFF"}, "slow");
		},
		function() {
			$(this).animate({"color": "#656B69"}, "slow");
	});
		
	/*$("#computers1").retinaeffect({effect: '#retina_computers1',left: 110, top: 170});
	$("#computers2").retinaeffect({effect: '#retina_computers2',left:350, top: 35});
	$("#computers3").retinaeffect({effect: '#retina_computers3',left:35, top: 35});
	$("#computers4").retinaeffect({effect: '#retina_computers4',left:25, top: 25});
	$("#computers5").retinaeffect({effect: '#retina_computers5',left:45, top: 25});*/
});
