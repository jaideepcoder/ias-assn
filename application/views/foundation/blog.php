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

  <title>Blog | This is IAS | Made personal for you...</title>

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
   	<link type="text/css" rel="stylesheet" media="screen" href="<?= base_url(); ?>stylesheets/chat.css" />
	<link type="text/css" rel="stylesheet" media="screen" href="<?= base_url(); ?>stylesheets/screen.css" />
	
	<!--[if lte IE 7]>
	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/screen_ie.css" />
	<![endif]-->
	
	
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/app.css">

<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon.png">
  <script src="<?= base_url(); ?>javascripts/modernizr.foundation.js"></script>
</head>
<body>

  <!-- Nav Bar -->

  <div class="row">
    <div class="twelve columns">
      <ul class="nav-bar">
      	<li id="blog"><?= anchor('blog', 'Blog', array('class'=>'active')); ?></li>
        <li><?= anchor('dashboard', 'Dashboard'); ?></li>
        <li><?= anchor('forum', 'Forum'); ?></li>
        <li class="has-flyout">
        	<?= anchor('chatroom', 'Chat Room'); ?>
        	<a href="#" class="flyout-toggle"><span> </span></a>
            <ul class="flyout">
               <?php foreach ($chatter as $row) {
				  echo "<li><a href='javascript:void(0)' onclick=\"javascript:chatWith('" . $row['username'] . "')\">" . $row['fname'] . ' ' . $row['lname'] . "</a></li>";
			  }
  			?>
            </ul>
        </li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li id="my"><?= anchor('blog/blogger/'.$username, 'My Posts'); ?></li>
        <li id="new"><a href="#" data-reveal-id="newblog">New Post</a></li>
        <li class="has-flyout">
        	<a href="#"><?= $username ?></a>
        	<a href="#" class="flyout-toggle"><span> </span></a>
            <ul class="flyout right">
                  <li><?= anchor('settings', 'Account Settings'); ?></li>
                  <li><?= anchor('dashboard/logout', 'Logout'); ?></li>
            </ul>
        </li>
      </ul>

      <h1>Blog <small>Want your thought out there. This is the place for it.</small>
      <hr />
    </div>
  </div>

  <!-- End Nav -->

  <!-- Modal -->
  <div id="newblog" class="reveal-modal">
    
    
   <?= form_open_multipart('blog/another'); ?>
   <h2>Create Post</h2>
  <label>Title</label>
  <input type="text" name="title" value="<?php echo set_value('title'); ?>" placeholder="Blog Post Title" required/>
  <input type="hidden" name="username" value="<?=$username?>" />
  <input type="hidden" name="date"  value="<?=date('Y-m-d');?>"/>
  <label>Blog</label>
  
  <textarea name="content" cols="40" rows="10"></textarea>
  <label>Taggit</label>
  <input type="text" name="taggit" value="<?php echo set_value('taggit'); ?>" placeholder="ias, serviceweek, work" />
  <label>Did you take pictures?</label>
  <input type="file" name="userfile" value="<?php echo set_value('image'); ?>" />
  <input type="submit" class="button right" value="Create"/>
  <!--<div style="margin-top: 10px;" class="alert-box alert"><?=$flashblog?></div>-->
</form>

    <a class="close-reveal-modal">×</a>
  </div>

  <!-- End Modal -->
  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Main Blog Content -->
    <div class="nine columns" role="content">
		<?php
		foreach($posts as $post) {
			echo "<article><h3 class=\"bloghead\">" . anchor('blog/post/'.$post['id'], $post['title']) . "	</h3>" . $post['taggit'] . "<h6>Written by " . anchor('blog/blogger/'.$post['username'], $post['fname'] . ' ' . $post['lname'], array('class'=>'blogauth')) . " on ". anchor('blog/at/'.$post['date'],$post['date'], array('class'=>'blogat')). ".</h6><div class=\"row\"><div class=\"six columns\"><p>" . nl2br($post['post']) ."</p></div><div class=\"six columns\"><img src=\"".$post['image'].".jpg\" width=\"400\" height=\"240\" /></div></article><hr />";
		}
		
		?>      
      <article>

    </div>

    <!-- End Main Content -->


    <!-- Sidebar -->

    <aside class="three columns">
<!--
      <h5>Categories</h5>
      <ul class="side-nav">
        <li><a href="#">News</a></li>
        <li><a href="#">Code</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Fun</a></li>
        <li><a href="#">Weasels</a></li>
      </ul>

      <div class="panel">
        <h5>Featured</h5>
        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
        <a href="#">Read More &rarr;</a>
      </div>

    </aside>
-->
    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


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

<!-- Each tip is set within this <ol>. -->
<!-- This creates the order the tips are displayed -->
<ol id="joyride1" hidden>
  <!--data-id needs to be the same as the parent it will attach to -->
  <li data-id="blog"<p>Take a guided Tour?</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="my"><p>Access all the Blog Posts written by you here.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="new"><p>Create a new Post.</p></li>
  <!--This tip will be display as a modal -->
  <li data-class="bloghead"><p>Click on the heading to see the full post.</p></li>
  <!--This tip will be display as a modal -->
  <li data-class="blogauth"><p>See all the posts by a specific author.</p></li>
  <!--This tip will be display as a modal -->
  <li data-class="label"><p>See all posts containing a particular tag.</p></li>
  <!--This tip will be display as a modal -->
  <li data-class="blogat"><p>See all posts published at a particular date.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="blog"><p>End of tour</p></li>
  <!--This tip will be display as a modal -->
  <!--<li data-id="joy1">Take a guided Tour?</li>
  <!--This tip will be display as a modal -->
</ol>

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
  <script type="<?= base_url(); ?>text/javascript" src="javascripts/chat.js"></script>
  
  <script>
  $(window).load(function() {
    $("#joyride").joyride({
      /* Options will go here */
     scrollSpeed: 300,
     timer: 5000,
     startTimerOnClick: true,
     //tipAnimation: pop,
     cookieMonster: true,
     cookieName: 'joyblog',
     cookieDomain: false
    });
  });
  </script>

</body>
</html>
