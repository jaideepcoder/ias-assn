<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Home | This is IAS | Made personal for you...</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/app.css">
<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon.png">



  <script src="<?= base_url(); ?>javascripts/modernizr.foundation.js"></script>
</head>
<body>
	  	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/screen.css" />

	<!--[if lte IE 7]>
	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/screen_ie.css" />
	<![endif]-->
    <!-- Navigation -->

      <div class="row">
        <div class="twelve columns">

        <nav class="top-bar">
          <ul class="top-bar">
            <li class="name" id="joystart"><h1><?= anchor('gateway', 'Home'); ?></h1></li>
            <li class="toggle-topbar"><a href="#"></a></li>
          </ul>

          <section>
            <ul class="left">
              <li id="dashboard"><?= anchor('dashboard', 'Dashboard'); ?></li>
              <li id="blog"><?= anchor('blog', 'Blog'); ?></li>
              <li id="forum"><?= anchor('dashboard', 'Forum'); ?></li>
              <li class="has-dropdown">
              	<?= anchor('chatroom', 'Chat Room', array('id' => 'chatroom')); ?>
              	<ul class="dropdown">
              		<?php
					foreach ($chatter as $row) {
						echo "<li><a href='javascript:void(0)' onclick=\"javascript:chatWith('" . $row['username'] . "')\">" . $row['fname'] . ' ' . $row['lname'] . "</a></li>";
					}
  			?>
              	</ul>
              </li>
              <li id="google"><a href="http://www.google.com/search?q=<?=$fname . '+' . $lname; ?>" target="_blank">Google Yourself</a></li>  
            </ul>
			
            <ul class="right">
            	<li class="has-dropdown">
  	<a><input type="search" placeholder="Search..." x-webkit-speech/></a>
  	
  	<ul id="find" class="dropdown right"></ul>
  </li>
              <li id="settings" class="has-dropdown">
                <a href="#"><?= $username; ?></a>

                <ul class="dropdown">
                  <li><?= anchor('settings', 'Account Settings', array('style' => 'padding-left:15px;')); ?></li>
                  <li><?= anchor('dashboard/logout', 'Logout', array('style' => 'padding-left:15px;')); ?></li>
                </ul>
                </li>
            </ul>
          </section>
        </nav>

      </div>
    </div>

    <!-- End Navigation -->
    
    <!-- Magellan -->
    <div class="row">
    	<div class="twelve columns">
    		    <dl id="magellanTopNav" class="sub-nav" data-magellan-expedition="fixed" style="z-index: 10;background-color: #FFFFFF; width: 100%;">
    	<dt>Settings Overview:</dt>
  <dd data-magellan-arrival='general'><a href="#general">General</a></dd>
  <dd data-magellan-arrival='security'><a href="#security">Security</a></dd>
  <dd data-magellan-arrival='details'><a href="#details">Details</a></dd>
  <dd data-magellan-arrival='address'><a href="#address">Address</a></dd>
  <dd data-magellan-arrival='contact'><a href="#contact">Contact</a></dd>
  <dd data-magellan-arrival='about'><a href="#about">About</a></dd>
  <dd data-magellan-arrival='family'><a href="#family">Family</a></dd>
  <dd data-magellan-arrival='emails'><a href="#emails">Emails</a></dd>
  <dd data-magellan-arrival='social'><a href="#social">Social</a></dd>
</dl>
    <!-- End Magellan -->
    	</div>
    </div>
    <div class="row">
    	<div class="two columns"></div>
    	<div class="eight columns">
    
    <a name="general" data-magellan-destination='general'></a>
    <div class="row">
    	<div hidden></div>
    	<h6>Name:</h6>
    	<div class="six columns">
    		<input type="text" maxlength="50" name="fname" placeholder="First Name" value="<?= $fname; ?>"/>
    	</div>
    	<div class="six columns">
    		<input type="text" maxlength="50" name="lname" placeholder="Last Name" value="<?= $lname; ?>"/>
    	</div>
    </div>


<a name="security" data-magellan-destination='security'></a>
<div class="row">
  <h6>Password:</h6>
  <input type="password" maxlength="50" name="prevpass" placeholder="Previous Password" />
    	<div class="six columns">
    		<input type="password" maxlength="50" name="password" placeholder="New Password" />
    	</div>
    	<div class="six columns">
    		<input type="password" maxlength="50" name="checkpassword" placeholder="Re-enter Password" />
    	</div>
    </div>


<a name="details" data-magellan-destination='details'></a>
<div class="row">
  <h6>Details:</h6>
  <input type="date" name="bday" />
    	<div class="six columns">
    		<input type="text" maxlength="4" name="batch" placeholder="Batch" value="<?= $batch; ?>" />
    	</div>
    	<div class="six columns">
    		<input type="text" maxlength="2" name="cadre" placeholder="Cadre" value="<?= $cadre; ?>" />
    	</div>
    </div>

<a name="address" data-magellan-destination='address'></a>
<div class="row">
  <h6>Address:</h6>
  <input type="text" name="street" placeholder="Street" value="<?= $street; ?>"/>
    	<div class="four columns">
    		<input type="text" name="city" placeholder="City" value="<?= $city; ?>" />
    	</div>
    	<div class="four columns">
    		<input type="text" name="state" placeholder="State" value="<?= $state; ?>" />
    	</div>
    	<div class="four columns">
    		<input type="text" name="zip" placeholder="Zip" value="<?= $zip; ?>" />
    	</div>
    </div>
    
<a name="contact" data-magellan-destination='contact'></a>
<div class="row">
  <h6>Contact:</h6>
    	<div class="six columns">
    		<?php
			if (isset($mobile[0]['number'])) {
				foreach ($mobile as $row) {
					echo "<div class=\"row\"><div class=\"eight columns\"><input type=\"tel\" maxlength=\"10\" placeholder=\"Number\" value=\"" . $row['number'] . "\"></div><div class=\"four columns\"><input type=\"text\" maxlength=\"1\" placeholder=\"type\" value=\"" . $row['type'] . "\"></div></div>";
				}
			}
            ?>
			<div class="row"><div class="eight columns"><input type="tel" maxlength="10" placeholder="Number" /></div><div class="four columns"><input type="text" placeholder="-" maxlength="1"/></div></div>
    </div>
    <div class="six columns">
    	<?php
		if (isset($landline[0]['std'])) {
			foreach ($landline as $row) {
				echo "<div class=\"three columns\"><input type=\"text\" maxlength=\"4\" placeholder=\"Std\" value=\"" . $row['std'] . "\"></div><div class=\"six columns\"><input type=\"tel\" maxlength=\"10\" placeholder=\"Number\" value=\"" . $row['number'] . "\"></div><div class=\"three columns\"><input type=\"text\" maxlength=\"1\" placeholder=\"type\" value=\"" . $row['type'] . "\"></div>";
			}
		}
            ?>
			<div class="three columns"><input type="text" maxlength="4" placeholder="Std" ></div><div class="six columns"><input type="tel" maxlength="10" placeholder="Number" /></div><div class="three columns"><input type="text" maxlength="1" placeholder="-" /></div>
    </div>
    </div>
    
<a name="about" data-magellan-destination='about'></a>
<div class="row">
	<h6>About Me:</h6>
	<textarea name="aboutme" rows="5" placeholder="Tell us about yourself..."><?= $aboutme; ?></textarea>
</div>
<a name="family" data-magellan-destination='family'></a>
<div class="row">
  <h6>Family:</h6>
    <div class="six columns">
   		<input type="text" maxlength="50" placeholder="Spouse" value="<?= $spouse; ?>">
    </div>
    <div class="six columns">
		<?php
		if (isset($children[0]['child'])) {
			foreach ($children as $row) {
				echo "<div class=\"row\"><input type=\"text\" placeholder=\"Child\" value=\"" . $row['child'] . "\"></div>";
			}
		}
       	?>
		<div class="row"><input type="text" maxlength="50" placeholder="Child"></div>
    </div>
    </div>

<a name="emails" data-magellan-destination='emails'></a>
<div class="row">
	<h6>Emails:</h6>
<?php
if (isset($emails[0]['email'])) {
	foreach ($emails as $row) {
		echo "<div class=\"row\"><input type=\"email\" placeholder=\"Email\" value=\"".$row['email']."\"></div>";
	}
}
?>
<div class="row"><input type="email" placeholder="Email"></div>
</div>

<a name="social" data-magellan-destination='social'></a>
<div class="row">
	<h6>Social: </h6>
	<div class="six columns"><input type="text" placeholder="facebook" value="<?= $facebook; ?>"/></div>
	<div class="six columns"><input type="text" placeholder="twitter" value="<?= $twitter; ?>"/></div>
</div>

</div>
<div class="four columns"></div>
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
              <li><a href="contact">Contact Us</a></li>
              <li><a href="#">Behind the Scenes</a></li>
              <li><a href="#">Map</a></li>
              <li><a href="http://www.hardcodeit.com">HardcodeIT</a></li>
            </ul>
        </div>

      </div>
  </div>
  </footer>
  <!-- End Footer -->

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
  <script src="<?= base_url(); ?>javascripts/jquery.js"></script>
  <script src="<?= base_url(); ?>javascripts/foundation.min.js"></script>

  
  <!-- Initialize JS Plugins -->
  <script src="<?= base_url(); ?>javascripts/app.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>javascripts/chat.js"></script>
  <script type="text/javascript">var base_url = '<?= base_url(); ?>';</script>
  <script type="text/javascript">
  			$(document).ready(function () {
  		$('input').keypress(function (e) {
  			console.log(e);
  			$.ajax({
  				type: 'post',
  				data: {
  					q: $('input').val()
  				},
  				url: base_url+'dashboard/search',
  				dataType: 'json',
  				success: function(data) {
  					console.log(data);
  					var mark = "";
  					for (x in data) {
  						mark += "<li><a href='<?=base_url(); ?>
						dashboard / profile / "+data[x]["username"]+"'>"+data[x]["fname"]+" "+data[x]["lname"]+"</a></li>";
						}
						$('#find').html(mark);
						}
						});
						});
						});
  </script>
</body>
</html>