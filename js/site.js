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
	
	$('#gp_button-block_5e68a1cd61e2c').click(function(e){
		e.preventDefault();
		$('#gform_submit_button_1').trigger('click');
	});

});