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

  <title>Home | IAS</title>
  
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
  <div class="row">
    <div class="twelve columns">

    <!-- Navigation -->

      <div class="row">
        <div class="twelve columns">

        <nav class="top-bar">
          <ul class="top-bar">
            <li class="name"><h1><?= anchor('dashboard', 'Home'); ?></h1></li>
            <li class="toggle-topbar"><a href="#"></a></li>
          </ul>

          <section>
            <ul class="left">
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>

            <ul class="right">
              <li class="has-dropdown">
                <a href="#"><?= $username ?></a>

                <ul class="dropdown">
                  <li><a href="#" style="padding-left:15px;">Privacy Settings</a></li>
                  <li><a href="#" style="padding-left:15px;">Account Settings</a></li>
                  <li><a href="dashboard/logout" style="padding-left:15px;">Logout</a></li>
                </ul>
            </ul>
          </section>
        </nav>

      </div>
    </div>

    <!-- End Navigation -->

      <div class="row">

  <!-- Side Bar -->

        <div class="four mobile-four columns">

          <img src="http://res.cloudinary.com/demo/image/facebook/w_500,h_500,c_thumb,g_face/jaideep.kiler.jpg">

          <div class="hide-for-small panel">
            <h3>Header</h3>
            <h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.
            </h5>
          </div>

          <a href="#">
          <div class="panel callout radius" align="center">
            <h6>99&nbsp; items in your cart</h6>
          </div>
          </a>

        </div>

    <!-- End Side Bar -->


    <!-- Thumbnails -->

        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <img src="http://placehold.it/1000x1000&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="four mobile-two columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="four mobile-two columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="four mobile-two columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="four mobile-two columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="four mobile-two columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

    <!-- End Thumbnails -->


    <!-- Managed By -->

            <div class="twelve columns">
              <div class="panel">
                <div class="row">

                  <div class="two mobile-two columns">
                    <img src="http://placehold.it/300x300&text=Site Owner">
                  </div>

                  <div class="ten mobile-two columns">
                    <strong>This Site Is Managed By<hr/></strong>

                    Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis
                  </div>

                </div>
              </div>
            </div>

    <!-- End Managed By -->

          </div>
        </div>
      </div>


    <!-- Footer -->

      <footer class="row">
        <div class="twelve columns"><hr />
          <div class="row">

            <div class="six columns">
              <p>&copy; Copyright no one at all. Go to town.</p>
            </div>

            <div class="six columns">
              <ul class="link-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>

          </div>
        </div>
      </footer>

    <!-- End Footer -->

    </div>
  </div>

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
</body>
</html>
