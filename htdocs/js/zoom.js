jQuery.fn.retinaeffect = function() {

	var left	= 0,
		top		= 0,
		sizes	= { retina: { width:190, height:190 }, webpage:{ width:350, height:283 } },
		//webpage	= $('#computers1'),
		webpage	= $(this[0]),
		//offset	= { left: webpage.offset().left, top: webpage.offset().top },
		args = arguments[0] || {},
		//retina	= $('#retina_computers1');
		retina	= $(args.effect);

	/*if(navigator.userAgent.indexOf('Chrome')!=-1)
	{
		//	Applying a special chrome curosor,
		//	as it fails to render completely blank curosrs. 
			
		retina.addClass('chrome');
	}*/
	
	webpage.mousemove(function(e){
		
		var offset	= { left: webpage.offset().left, top: webpage.offset().top };
		left = (e.pageX-offset.left);
		top = (e.pageY-offset.top);

		if(retina.is(':not(:animated):hidden')){
			/* Fixes a bug where the retina div is not shown */
			webpage.trigger('mouseenter');
		}

		if(left<0 || top<0 || left > sizes.webpage.width || top > sizes.webpage.height)
		{
			/*	If we are out of the bondaries of the
				webpage screenshot, hide the retina div */

			if(!retina.is(':animated')){
				webpage.trigger('mouseleave');
			}
			return false;
		}

		/*	Moving the retina div with the mouse
			(and scrolling the background) */

		retina.css({
			left				: left + args.left - sizes.retina.width/2,
			top					: top + args.top - sizes.retina.height/2,
			backgroundPosition	: '-'+(1.6*left)+'px -'+(1.35*top)+'px'
		});
	}).mouseleave(function(){
		retina.stop(true,true).fadeOut('fast');
	}).mouseenter(function(){
		retina.stop(true,true).fadeIn('fast');
	});
}