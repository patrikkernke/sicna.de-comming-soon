$( document ).ready(function() {

	var overlayContact = $('#overlayContact');

	var contactOpenBtn = $('#contactOpenBtn');
	contactOpenBtn.on('click', function() {
		overlayContact.addClass('open');
	});

	var contactHideBtn = $('#contactHideBtn');
	contactHideBtn.on('click', function() {
		overlayContact.removeClass('open');
	});

});