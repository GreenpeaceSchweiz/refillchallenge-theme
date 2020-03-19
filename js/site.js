jQuery(function($) {

	var titleObj = $('.color-change');

	titleObj.each(function(indx){

		var titleToSplit = $(this).html();
		var titleSplitted = '';
		var skipBr = false;
		for (var i = 0; i < titleToSplit.length; i++) {
			var curentChar = titleToSplit.charAt(i);
			var nextChar = titleToSplit.charAt(i+1);
			if(curentChar=='<'|| skipBr){
				skipBr = true;
				titleSplitted += curentChar;
				if(curentChar=='>'){
					skipBr = false;
				}
			} else { 
				if(nextChar == ' '){
					titleSplitted += '<span>'+curentChar+' </span>';
				}else if(curentChar!=' ') {
					titleSplitted += '<span>'+curentChar+'</span>';
				}
			}
		}
		$(this).html(titleSplitted); 
	});
	BackgroundCheck.init({
		targets: '.color-change span',
		images: '.wp-block-image img',
		threshold: 55
	});

	/*BackgroundCheck.init({
		targets: '.back-check span',
		images: '.wp-image-85',
		threshold: 90
	});*/
	

	// fix bug to check if input has value
	jQuery(document).on('gform_post_render', function(){
 
		// if any input fields are completed move the placeholder on top
		$('div.ginput_container input').each(function(){
			if( $(this).val() != '' ) {
				$(this).parent().next().addClass('complete');
			}
		});
 
    });


	// handle form trigger on outside button
	$('.form-btn .gp-btn').click(function(e){
		e.preventDefault();
		$('#gform_submit_button_1').trigger('click');
	});

	// move placeholder on top
	$(document).on('click touchstart', 'div.ginput_container input', function(e){
		e.preventDefault();
		$(this).parent().next().addClass('complete');
	});

	// if input is empty move placeholder back
	$(document).on('blur', 'div.ginput_container input', function(e){
		e.preventDefault();
		if( $(this).val() == '' ) {
			$(this).parent().next().removeClass('complete');
		}
	});

	if( $('.gp-slider').length > 0 ) {

		$('.gp-slides').each(function(){
			$(this).slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				autoplay: true,
  				autoplaySpeed: 4000,
			});
		});

	}

});