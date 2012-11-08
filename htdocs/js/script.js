$(document).ready(function(){
	setTimeout(function(){ 
		$("div#succeed_message").hide();
	}, 12000 );
	
	$(".sidebar-nav").fadeIn(3000);
	$("#facepile").fadeIn(3000);
	$("#page_home").fadeIn(3000);
	$(".sb").fadeIn(3000);
			
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
		effect: 'fade',
		animSpeed: 700,
        pauseTime: 3500,
		pauseOnHover: true
	});
	
	$(".sidebar-nav").mouseout(function(){
      $(this).removeClass("sidebar-nav-mousedown-effect");
    }).mouseup(function(){
      $(this).removeClass("sidebar-nav-mousedown-effect");
    }).mousedown(function(){
      $(this).addClass("sidebar-nav-mousedown-effect");
    });

	$(".greenbutton").hover(
		function() {
			$(this).animate({"backgroundColor": "#6da334", "color": "#FFFFFF"}, "slow");
		},
		function() {
			$(this).animate({"backgroundColor": "#8ac04f", "color": "#FFFCF9"}, "slow");
	});
	
	$(".greenbutton").mouseout(function(){
      $(this).removeClass("greenbutton-mousedown-effect");
    }).mouseup(function(){
      $(this).removeClass("greenbutton-mousedown-effect");
    }).mousedown(function(){
      $(this).addClass("greenbutton-mousedown-effect");
    });
	
	$("button#product1").click(function() {
		if($("div#products_product1").css("display")=="none"){
			$("div#products_product2").fadeOut("fast");
			$("div#products_product1").fadeIn("slow");
		}
	});
	
	$("button#product2").click(function() {
		if($("div#products_product2").css("display")=="none"){
			$("div#products_product1").fadeOut("fast");
			$("div#products_product2").fadeIn("slow");
		}
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

	
	// keep track of which tab is active and it's associated content
	var $active, $content, $links = $('.showhide').find('a');
	
	// Use the first link as the initial active tab
	$active = $links.first().parent().addClass('active');
	$content = $($active.find('a').attr('href'));
	
	// Hide the remaining content
	$links.not(':eq(0),:eq(1)').each(function () {
		$($(this).attr('href')).hide();
	});
	
	// Bind the click event handler
	$('.showhide').on('click', function(e){
		// Make the old tab inactive.
		$('.showhide').removeClass('active');		
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});

		// Update the variables with the new link and content
		$active = $(this);
		$content = $($(this).find('a').attr('href'));
	
		// Make the tab active.
		$active.addClass('active');
		$content.css({
			'visibility':'visible',
			'height':'auto'
		}).fadeIn('500');
	
		// Prevent the anchor's default click action
		e.preventDefault();
		
		window.location.hash=$active.find('a').attr('href');
		$(window).scrollTop($('#brand').position().top);
	});
	
	$(".nav").find("li").not(".showhide").find("a").hover(
		function() {
			$(this).animate({"color": "#FFFFFF"}, "slow");
		},
		function() {
			$(this).animate({"color": "#656B69"}, "slow");
	});
	
	$('#home_about #caseSlider').bxSlider({
      displaySlideQty: 2,
      moveSlideQty: 2
    });
	
	$('#page_about #caseSlider').bxSlider({
      displaySlideQty: 2,
      moveSlideQty: 2
    });
	
	if(window.location.hash!=""){
		$('div[id^="page_"]').css({
			'visibility':'hidden',
			'height':'0',
			'margin-bottom':'0'
		});
		$(window.location.hash).css({
				'visibility':'visible',
				'height':'auto'
			}).fadeIn('500');
		$('.showhide').removeClass('active');
		$('.showhide a[href='+window.location.hash+']').parent().addClass('active');
		
		if(window.location.hash=="#page_home"){
			window.location.href = window.location.href.split("#")[0];
		}
	
		$(window).scrollTop($('#brand').position().top);
	};
	
	$("#computers1").retinaeffect({effect: '#retina_computers1',left: 110, top: 170});
	$("#computers2").retinaeffect({effect: '#retina_computers2',left:350, top: 35});
	$("#computers3").retinaeffect({effect: '#retina_computers3',left:35, top: 35});
	$("#computers4").retinaeffect({effect: '#retina_computers4',left:25, top: 25});
	$("#computers5").retinaeffect({effect: '#retina_computers5',left:45, top: 25});
});
