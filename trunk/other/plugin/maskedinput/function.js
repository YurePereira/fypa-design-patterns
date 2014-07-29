/*
 * Mask to adapt to the new and old format phone number in Brazil. Examples (99)99999-9999 or (99)9999-9999
 * Used plugin jquery.maskedinput-1.3.min.js
 * 
 */
$('#txt_phone').mask("(99)9999-9999?9").focusout(function() {

	var nodeValue = $(this).val().replace(/\D/g, '');
	$(this).unmask();
	if (nodeValue.length >= 11) {
		$(this).mask("(99)99999-9999");
	} else {
		$(this).mask("(99)9999-9999?9");
	}

});