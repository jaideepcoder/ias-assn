<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" manifest="<?=  base_url(); ?>cache.appcache"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="<?= $description; ?>" />
		<meta name="keywords" content="<?= $keywords; ?>" />
		<title><?= $title; ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link href='https://fonts.googleapis.com/css?family=Pirata+One' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="images/favicon.png">

  <script src="javascripts/modernizr.foundation.js"></script>
</head>
<body>

<div id="fb-root"></div>

  <!-- Navigation -->

  <nav class="top-bar fixed">
    <ul>
      <li class="name"><h1><?= anchor('dashboard', 'Home'); ?></h1></li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>
<!--
    <section>
      <ul class="left">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
-->
      <ul class="right">
      	<li></li>
      	<li><a href="#" data-reveal-id="signup">Sign Up</a></li>
      	<li><a href="#" data-reveal-id="login">Login</a></li>
      </ul>
     </section>
  </nav><!--
        <li class="has-dropdown">
          <a href="#">Link</a>

          <ul class="dropdown">
            <li><a href="#">Dropdown Link</a></li>
            <li><a href="#">Dropdown Link</a></li>
            <li><a href="#">Dropdown Link</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </nav>-->

  <!-- End Navigation -->


  <!-- Header -->
	<div id="slider">
		<div id="overlay">All India IAS Association</div>
		<?php
		$arr = array();
		$check = FALSE;
		for ($i = 1; $i <= 20; $i++) {
			$num = rand(1, 40);
			foreach ($arr as $node) {
				$check = ($num == $node) ? TRUE : FALSE;
			}
			if ($check) {
				$i--;
				break;
			} else {
				array_push($arr, $num);
			}
			echo "\t\t<img src=\"" . base_url() . "images/" . $num . ".jpg\"/>\n";
		}
		?>
      </div>
   <!-- <img src="http://placehold.it/1600x600&text=IAS"><br><br>

  <!-- End Header -->
  <div id="login" class="reveal-modal">
    
    
   <?= form_open('verify'); ?>
  <label>Username</label>
  <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="john.doe" required/>
  <label>Password</label>
  <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" class="twelve" placeholder="Password" required/>
  <input type="submit" class="button" value="Login"/>
  <!--<div class="fb-login-button" data-show-faces="false" data-width="200" data-max-rows="1"></div>-->
  <div style="margin-top: 10px;" class="alert-box alert"><?= $flashlog ?></div>
  <div style="margin-top: 10px;" class="alert-box success"><?=$flashsuccessreg; ?></div>
</form>

    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="signup" class="reveal-modal">
    
    <?= form_open('register/new'); ?>
  <label>&nbsp;&nbsp;&nbsp;&nbsp;Name</label>
    <div class="row">
    <div class="six columns">
      <input type="text" id="fname" name="fname" placeholder="First Name" maxlength="50" required/>
    </div>
    <div class="six columns">
      <input type="text" id="lname" name="lname" placeholder="Last Name" maxlength="50" required/>
    </div></div>
    <label>Username</label>
  <input type="text" id="username" name="username" placeholder="john.doe" maxlength="50" required/>
    <label>Email</label>
  <input type="email" id="email" name="email" placeholder="john.doe@domain.com"  required/>
    <label>Password</label>
  <input type="password" id="password" name="password" placeholder="Password" required/>
  <label>Confirm Password</label>
  <input type="password" placeholder="Password"  required/>
  <label>Birthday</label>
  <input type="date" name="bday">
  <label>Cadre</label>
  <input type="text" name="cadre" maxlength="2">
  <label>Batch</label>
  <input type="text" name="batch" min="1111" max="9999">
  <label>About Me</label>
  <textarea name="aboutme" rows="10" cols="50"></textarea>
  <label>Contact Info</label>
  <div class=" row">
  	<div class="six columns">
      <div class="two mobile-one columns">
        <span class="prefix" style="width: 30px;">+91</span>
      </div>
      <div class="ten mobile-three columns">
        <input type="tel" min="1111111111" maxlength="10" max="9999999999" name="mobile" placeholder="Mobile"/>
      </div>
    </div>
  	<div class="six columns">
      <div class="one mobile-one columns">
        <span class="prefix" style="width: 30px;">+91</span>
      </div>
      <div class="four mobile-one columns">
        <input type="tel" min="111" maxlength="3" max="999" name="std" style="margin-left: 10px;" placeholder="Std"/>
      </div>
      <div class="six mobile-three columns">
        <input type="tel" min="1111111" maxlength="7" max="7999999" name="landline" style="margin-left: 10px;" placeholder="Landline"/>
      </div>
    </div>
  </div>
  <label>Spouse</label>
  <input type="text" name="cadre" maxlength="2">
  
 
  <input type="submit" class="button" value="Sign Up"/>
  <div style="margin-top: 10px;" class="alert-box alert"><?=$flasherrorreg; ?></div>
</form>
    <a class="close-reveal-modal">×</a>
    </div>

  <!-- Three-up Content Blocks -->
  
  <div class="row">
  	<div class="two columns">
    	<img src="http://placehold.it/100x50&text=<?= $site_count; ?>">
    </div>
    <div class="five columns">
    	<div class="fb-like" data-href="http://ias-assn.rs.af.cm" data-send="true" data-width="450" data-show-faces="true"></div>
    </div>
    
    <div class="four columns">
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>
	</div>
    
    <div class="one columns">
    	<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>
	! function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (!d.getElementById(id)) {
			js = d.createElement(s);
			js.id = id;
			js.src = "//platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);
		}
	}(document, "script", "twitter-wjs");
</script>
    </div>
    
  </div>
  
  
  <!-- Footer -->

  <footer class="row">
  <div class="twelve columns"><hr />
      <div class="row">

        <div class="six columns">
            <p>&copy; Developed by HardcodeIT Solutions.</p>
        </div>

        <div class="six columns">
            <ul class="link-list right">
              <li><a href="index.php/app/contact">Contact Us</a></li>
              <li><a href="#">Behind the Scenes</a></li>
              <li><a href="#">Map</a></li>
              <li><a href="http://www.hardcodeit.com">HardcodeIT</a></li>
            </ul>
        </div>

      </div>
  </div>
  </footer>

  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function() {
		$('.alert-box').hide();
		if ($('.alert-box.success').html() != "") {
			$('.alert-box.success').show();
		}

		if ($('.alert-box.alert').html() != "") {
			$('.alert-box.alert').show();
		}
		$('.alert-box').click(function() {
			$(this).hide('slow');
		});
	});
  </script>
  
    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').orbit();
		});
  </script>
  
  <!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
	(function() {
		var po = document.createElement('script');
		po.type = 'text/javascript';
		po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(po, s);
	})();
</script>
</body>
</html>
