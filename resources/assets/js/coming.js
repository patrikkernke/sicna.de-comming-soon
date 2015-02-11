$( document ).ready(function() {

	var overlayContact = $('#overlayContact');

	var contactOpenBtn = $('#contactOpenBtn');
	contactOpenBtn.on('click', function() {
		overlayContact.addClass('open');
	});

	var interval = setInterval(function() {
		contactOpenBtn.addClass('wobble');
		setTimeout(function() {
			contactOpenBtn.removeClass('wobble');
		}, 2500);
	}, 4000);

	var contactHideBtn = $('#contactHideBtn');
	contactHideBtn.on('click', function() {
		overlayContact.removeClass('open');
	});

});