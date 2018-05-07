//common scripts

var scriptUrl = 'http://localhost/angularapp/backend/assets/js/common.js';

jQuery(document).ready(function (){

	jQuery('.page-link').on('click', function (event){

		event.preventDefault();

		var link = jQuery(this).attr('href');

		console.log(link);

		if(link.indexOf('#') > -1 )
		{
			return false;
		}

	
		jQuery.ajax({

			url: link,
			type: 'GET',
			success: function (data){

				jQuery('#products').html(jQuery(data).find('#products'));

				jQuery.getScript(scriptUrl);

				window.history.pushState(null, '', link);

			}

		});

	});

});