;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);

//Custom Javascript

setTimeout(function() {
$(document).ready(function() {
	if($('.alert-box').html()=="") {
		$("a[data-reveal-id]").click();
		$("#fname").focus();
	}
	else {
		$("a[data-reveal-id]")[1].click();
		$("#username").focus();
	}
});
},3000);

$(document).ready(function() {
	$('.alert-box').hide();
	if($('.alert-box').html()!="") {
		$('.alert-box').show();
	}
	$('.alert-box').click(function() {
		$('.alert-box').hide('slow');
	});
	$('#contactsubmit').click(function() {
		$.ajax({
			type: 'POST',
			url: base_url+'index.php/app/feedback',
			data: {
				user: $('#user').val(),
				message: $('#message').val()
			},
			datatype: 'json',
			success: function(data) {
				
				if(data.success == true) {
					$('.alert-box').html('Your message has been delivered successfully');
					$('.alert-box').addClass('success');
				}
				else {
					$('.alert-box').html('Awe snap! This was not supposed to happen!');
					$('.alert-box').addClass('alert');
				}
				$('alert-box').show();
			}
		});
	});
	
	$('.fb-login-button').click(function() {
		login();
	});
});

//API Calls
//Facebook Like...

( function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=451411928257919";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
//Facebook Login

  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '451411928257919', // App ID
      channelUrl : '//ias-assn.rs.af.cm/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    window.location.assign("/dashboard.php");
  } else if (response.status === 'not_authorized') {
    // not_authorized
    //login();
  } else {
    // not_logged_in
    //login();
  }
 });

  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
   
function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
            //testAPI();
        } else {
            // cancelled
        }
    });
}
/*
function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
    });
}
*/
