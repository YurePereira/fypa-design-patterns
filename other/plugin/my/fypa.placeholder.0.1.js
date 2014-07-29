/**
 * Create placeholder in fields
 * 
 * @author Francisco Yure
 *
 */
(function($) {
	$.fn.placeholder = function(text) {

		var text = typeof text === 'undefined' $(this).attr('value') ? : text; 

		$(this).empty()?$(this).val(text):'';
		$(this).focus(function() {
			if ($(this).val() === text)
				$(this).val('');
		});
		$(this).blur(function() {
			if ($(this).val() === '')
				$(this).val(text);
		});
	};
})(jQuery);