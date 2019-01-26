jQuery(window).ready(function() {
	// Detecting mobile devices
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	var successResponse = 'תודה שנרשמתם! נציג מטעמנו יחזור אלייכם בקרוב';
	var errorMessage = 'Something went wrong';
	jQuery('#signup').on('submit', function() {
		event.preventDefault();
		//loader.addClass('show');
		var ajax_form_data = jQuery(this).serialize();
		console.log(ajax_form_data);
		jQuery.ajax({
			url: '/wp-admin/admin-ajax.php',
			type:   'post',
			data:   ajax_form_data,
			async: true,
		}).done (function (response) {
			console.log(response);
			if(response == 1) {
				jQuery('#response').html(successResponse);
			} else {
				jQuery('#response').html(errorMessage);
			}
			//loader.removeClass('show');
			setTimeout(removeResponseMessage, 5000);
		});
	});

	function removeResponseMessage() {
		jQuery('#response').html(' ');
	}

	jQuery('header a#menu').on('click', function(event) {
		event.preventDefault();
		jQuery(this).toggleClass('open');
	});

});