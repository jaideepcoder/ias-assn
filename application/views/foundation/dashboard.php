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
	  	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/screen.css" />

	<!--[if lte IE 7]>
	<link type="text/css" rel="stylesheet" media="all" href="<?= base_url(); ?>stylesheets/screen_ie.css" />
	<![endif]-->
    <div class="twelve columns">

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
              <li id="blog"><?= anchor('blog', 'Blog');?></li>
              <li id="forum"><?= anchor('forum', 'Forum'); ?></li>
              <li class="has-dropdown">
              	<?= anchor('chatroom', 'Chat Room', array('id'=> 'chatroom')); ?>
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
  	<a><input type="search" placeholder="Search..."/></a>
  	
  	<ul id="find" class="dropdown right"></ul>
  </li>
              <li id="settings" class="has-dropdown">
                <a href="#"><?= $username ?></a>

                <ul class="dropdown">
                  <li><?= anchor('settings', 'Account Settings', array('style'=>'padding-left:15px;'));?></li>
                  <li><?= anchor('dashboard/logout', 'Logout', array('style'=>'padding-left:15px;'));?></li>
                </ul>
                </li>
            </ul>
          </section>
        </nav>

      </div>
    </div>

    <!-- End Navigation -->

      <div class="row">

  <!-- Side Bar -->

        <div class="four mobile-four columns">

          <a class="th"><img src="http://res.cloudinary.com/demo/image/facebook/w_500,h_500,c_thumb,g_face/sanjay.bhoosreddy.jpg" height="500" width="500"></a>

          <div class="hide-for-small panel">
            <h3><?= $fname . ' ' . $lname; ?></h3>
            <h5>Spouse: <?= $spouse; ?></h5>
            <h6>Add: <?= $street; ?></h6>
            <p><?= $city . ', ' . $state . '. ' . $zip; ?></p>
            <p class="subheader"><?= $aboutme ?>
            </p>
          </div>

          
          <div class="panel callout radius" align="center">
            <h6><?= $batch . ' ' . $cadre; ?></h6>
          </div>

        </div>

    <!-- End Side Bar -->

<dl class="tabs six-up">
  <dd  id="tabs" class="active"><a href="#info">INFORMATION</a></dd>
  <dd><a href="#learn">LEARNING</a></dd>
  <dd ><a href="#activity">ACTIVITIES</a></dd>
  <dd><a href="#social">SOCIAL</a></dd>
  <dd><a href="#facility">FACILITATION</a></dd>
</dl>
    <!-- Thumbnails -->
<ul class="tabs-content">
	<li class="active" id="infoTab">
        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="cadre"><img width="500" height="500" src="<?= base_url(); ?>images/cadre.jpg">

              <div class="panel">
                <h5>Cadre</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="goi"><img width="500" height="500" src="<?= base_url(); ?>images/goi.jpg">

              <div class="panel">
                <h5>Government of India</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="pastures"><img width="500" height="500" src="<?= base_url(); ?>images/pastures.jpg">

              <div class="panel">
                <h5>Greener Pastures</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th"  data-reveal-id="sages"><img width="500" height="500" src="<?= base_url(); ?>images/sages.jpg">

              <div class="panel">
                <h5>The Sages</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="service"><img width="500" height="500" src="<?= base_url(); ?>images/service.jpg">

              <div class="panel">
                <h5>Service Matters</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Survival Guides</h5>
              </div></a>
            </div>
       </li>
       <li id="learnTab">
       	        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/lbsnaa.jpg"></a>

              <div class="panel">
                <h5><a href="http://www.lbsnaa.gov.in" target="_blank">LBSNAA</a></h5>
              </div>
            </div>

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/ethics.jpg"></a>

              <div class="panel">
                <h5><a href="http://www.cgg.gov.in" target="_blank">Ethics</a></h5>
              </div>
            </div>

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/district.jpg"></a>

              <div class="panel">
                <h5><a href="#" data-reveal-id="pastures">District Experience</a></h5>
              </div>
            </div>

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/states.jpg"></a>

              <div class="panel">
                <h5><a href="#" data-reveal-id="sages">State Government Experience</a></h5>
              </div>
            </div>

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/goie.jpg"></a>

              <div class="panel">
                <h5><a href="#" data-reveal-id="service">GOI Experience</a></h5>
              </div>
            </div>

            <div class="four mobile-two columns">
              <a class="th"><img width="500" height="500" src="<?= base_url(); ?>images/ted.jpg"></a>

              <div class="panel">
                <h5><a href="http://www.ted.com/talks/tags/government" target="_blank">TED for Governance</a></h5>
              </div>
            </div>
       </li>
       
       <li id="activityTab">
        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="cadre"><img width="500" height="500" src="<?= base_url(); ?>images/cadre.jpg">

              <div class="panel">
                <h5>LBSNAA Activity Board</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="goi"><img width="500" height="500" src="<?= base_url(); ?>images/goi.jpg">

              <div class="panel">
                <h5>Central Association and Cadre/ State Association activity board</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="pastures"><img width="500" height="500" src="<?= base_url(); ?>images/pastures.jpg">

              <div class="panel">
                <h5>Repository for Spouse Associations with activity board</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="sages"><img width="500" height="500" src="<?= base_url(); ?>images/sages.jpg">

              <div class="panel">
                <h5>Vision Statement activity board</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="service"><img width="500" height="500" src="<?= base_url(); ?>images/service.jpg">

              <div class="panel">
                <h5>Central Govt Deput activity board</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Pay Commission run-up activity board</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Tracking activities of other services activity board</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Improving &amp; maintaining the Portal activity board</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Emergency Issues and their Follow Up</h5>
              </div></a>
            </div>
	</li>
	
       <li id="socialTab">
        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="social"><img width="500" height="500" src="<?= base_url(); ?>images/cadre.jpg">

              <div class="panel">
                <h5>Connections</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="sages"><img width="500" height="500" src="<?= base_url(); ?>images/sages.jpg">

              <div class="panel">
                <h5>News</h5>
              </div></a>
            </div>
<!--
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="service"><img width="500" height="500" src="<?= base_url(); ?>images/service.jpg">

              <div class="panel">
                <h5>media contacts for every state</h5>
              </div></a>
            </div>
-->
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Awards/ honours given to officers</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Cultural/ creative activities by officers</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Inter Service socializing activity board</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Media coverage: Links and photos of paper clippings</h5>
              </div></a>
            </div>
            </li>
            
       <li id="facilityTab">
        <div class="eight columns">
          <div class="row">

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="hospitals"><img width="500" height="500" src="<?= base_url(); ?>images/hospitals.jpg">

              <div class="panel">
                <h5>Hospitals</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="banks"><img width="500" height="500" src="<?= base_url(); ?>images/bank.jpg">

              <div class="panel">
                <h5>Banks</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="clubs"><img width="500" height="500" src="<?= base_url(); ?>images/service.jpg">

              <div class="panel">
                <h5>Clubs</h5>
              </div></a>
            </div>

            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Transportations</h5>air, train, road
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Perquisites</h5>directorate of estates, ltc, htc
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>dvdvdvdvdvdvdv</h5>
              </div></a>
            </div>
            
            <div class="four mobile-two columns">
              <a class="th" data-reveal-id="survival"><img width="500" height="500" src="<?= base_url(); ?>images/survival.png">

              <div class="panel">
                <h5>Media coverage: Links and photos of paper clippings</h5>
              </div></a>
            </div>
            </li>
</ul>
    <!-- End Thumbnails -->
    
    <!-- Thumbnail Modals -->
    <div id="cadre" class="reveal-modal">
    <ul><h2>Cadre</h2>
    	<li><?= anchor('http://www.whispersinthecorridors.com', 'Cadre wise contact details of officers in the states, including official contacts plus FB/Twitter/Blog/ Email or any other brief personal details they may wish to add.', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.uplegassembly.nic.in', 'Cadre/ State IAS Association details', array('target' => '_blank')); ?></li>
    	<li><?= anchor('#', 'Cadre/State Spouse Association details', array('target' => '_blank', 'data-reveal-id' => 'cadrespouse')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="goi" class="reveal-modal">
    <ul><h2>Government of India</h2>
    	<li><?= anchor('http://persmin.gov.in/civillist/AsOnToday/AppendixQryCL.asp?fmAppNum=H', 'Contact details of serving officers on Central deputation', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.ias-assn.org', 'Central IAS Association details', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://iasowaindia.com/', 'Central Spouse Association details', array('target' => '_blank')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="pastures" class="reveal-modal">
    <ul><h2>Greener Pastures</h2>
    	<li><?= anchor('#', 'Batch wise contact details of officers on VRS or sabbatical', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.unicef.org/india/careers_1442.htm', 'Job Oppertunities at UNICEF', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.whoindia.org/en/Section330.htm', 'Job Oppertunities at WHO', array('target' => '_blank')); ?></li>
    	<li><?= anchor('https://imf.taleo.net/careersection/imf_external/moresearch.ftl?lang=en', 'Job Oppertunities at IMF', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.dfid.gov.uk/work-with-us/working-for-dfid/jobs/', 'Job Oppertunities at DFID', array('target' => '_blank')); ?></li>
    	<li><?= anchor('https://erecruit.ilo.org/public/', 'Job Oppertunities at ILO', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www1.ifc.org/wps/wcm/connect/careers_ext_content/ifc_external_corporate_site/ifc+careers', 'Job Oppertunities at IFC', array('target' => '_blank')); ?></li>
    	<li><?= anchor('https://careers.unesco.org/careersection/2/joblist.ftl', 'Job Oppertunities at UNESCO', array('target' => '_blank')); ?></li>
    	</ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="sages" class="reveal-modal">
    <ul><h2>The Sages</h2>
    	<li><?= anchor('http://persmin.gov.in/CivilList/Yr2012/RetireQryCL.asp', 'Batch wise contact details of retired officers', array('target' => '_blank')); ?></li>
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="service" class="reveal-modal">
    <ul><h2>Service Matters</h2>
    	<li><?= anchor('http://persmin.nic.in/DOPT_ActRules_AIS_Rules_Vol_I_Index.asp', 'AIS Rules and similar applicable rules, with latest circulars and decisions', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://msotransparent.nic.in/cghsnew/index.asp', 'CGHS Rules and available health facilities for officers', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://law.incometaxindia.gov.in/DIT/income-tax-rules.aspx', 'Income Tax Rules', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://wbxpress.com/2011/07/general-provident-fund-rules.html', 'GPF Rules, and financial planning', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.indianexpress.com/news/express-clinic-dhruv-s-financial-plan/808967', 'Financial planning', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.sarkaritel.com', 'Service matters relevant to Central deputation', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.sarkaritel.com', 'Service matters within cadres', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.sarkaritel.com', 'Training opportunities', array('target' => '_blank')); ?></li>
    	<li><?= anchor('#', 'Foreign posting opportunities', array('target' => '_blank', 'data-reveal-id' => 'pastures')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="survival" class="reveal-modal">
    <ul><h2>Survival Guides</h2>
    	<li><?= anchor('http://www.whispersinthecorridors.com', 'Delhi/ GOI survival guide with info on school admissions, housing, hospitals, clubs, etc.', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.uplegassembly.nic.in', 'State Capital wise survival guides on the pattern of Delhi guide', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.sarkaritel.com', 'District wise guide with links to official district site', array('target' => '_blank')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="cadrespouse" class="reveal-modal">
    <ul><h3>Spouse Association Details</h3>
    	<li><?= anchor('http://www.iasowamah.org/', 'I.A.S Officers Wives Association Maharashtra', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.karnatakaiasowa.org/', 'I.A.S Officers Wives Association Karnataka', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.iasowatn.com/', 'I.A.S Officers Wives Association Tamil Nadu', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.iasowaup.org/', 'I.A.S Officers Wives Association Uttar Pradesh', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://www.iasowaharyana.nic.in/', 'I.A.S Officers Wives Association Haryana', array('target' => '_blank')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="social" class="reveal-modal">
    <ul><h3>Social Connections</h3>
    	<li><?= mailto('ias_association@yahoogroups.co.in', 'Yahoo Groups'); ?></li>
    	<li><?= anchor('https://www.facebook.com/groups/ias.association/', 'Facebook', array('target' => '_blank')); ?></li>
    	<li><?= anchor('http://in.linkedin.com/', 'Linked In', array('target' => '_blank')); ?></li>    	
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>

  <div id="hospitals" class="reveal-modal">
    <ul><h3>Hospitals</h3>
    	<li><?= anchor('ihttp://msotransparent.nic.in/cghsnew/index1.asp?linkid=29&langid=1', 'CGHS Empanelled Hospitals', array('target' => '_blank')); ?></li>
    	<h2>CGHS Approved Hospitals</h2>
    	i><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?> Sector-38, Rajiv Chowk, Gurgaon, Haryana  122001</div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<h2>Private Hospitals</h2>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?> Sector-38, Rajiv Chowk, Gurgaon, Haryana  122001</div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?></div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?></div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?></div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  <div id="clubs" class="reveal-modal">
    <ul><h3>Clubs</h3>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.indiahabitat.org/', 'India Habitat Centre', array('target' => '_blank')); ?> Sector-38, Rajiv Chowk, Gurgaon, Haryana  122001</div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.iiccentre.org/', 'India Islamic Cultural Centre', array('target' => '_blank')); ?> 87-88, Lodhi Road, Lodhi Estate, New Delhi, Delhi 110003</div><div class="six columns"> Contact:  011 4353 5353</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?></div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    	<li><div class="row"><div class="six columns"><?= anchor('http://www.medanta.org/', 'Medanta', array('target' => '_blank')); ?></div><div class="six columns"> Hotline: +91 124 4141414</div></div></li>
    </ul>
    <a class="close-reveal-modal">×</a>
  </div>
  
  


    <!-- Managed By -->

            <div class="twelve columns">
              <div class="panel">
                <div class="row">

                  <div class="two mobile-two columns">
                    <img src="<?= base_url(); ?>images/dream.gif">
                  </div>

                  <div class="ten mobile-two columns">
                    <strong>This Site Is Managed By <a href="http://www.facebook.com/jaideep.kiler" target="_blank">Jaideep Kumar</a><hr/></strong>

                    There is no need to search for a supernatural cause of evil. Man, himself is capable of doing all sorts of wickedness.</div>

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
<ol id="joyride" hidden>
  <!--data-id needs to be the same as the parent it will attach to -->
  <li><p>Take a guided Tour?</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="joystart"><p> Home button helps you switch between the public and private pages. But it does not log you out.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="dashboard"><p>The dashboard is where you can access everything you need.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="blog"><p>The blog which you can share with your collegues freely.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="forum"><p>A place where ideas can be planted and nurturing.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="chatroom"><p>A list of all online users. You can chat in the familiar G+, facebook environment.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="google"><p>For those who wish to check out the net about themselves.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="settings"><p>Change your account information here. And logout</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="tabs"><p>Access your content and relavant informationo here. This is you dashboard.</p></li>
  <!--This tip will be display as a modal -->
  <li data-id="joystart"><p>End of tour. Thanks for using our application.</p></li>
  <!--This tip will be display as a modal -->
  <!--<li data-id="joy1">Take a guided Tour?</li>
  <!--This tip will be display as a modal -->
  <!--<li data-id="joy1">Take a guided Tour?</li>
  <!--This tip will be display as a modal -->
</ol>

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
  						mark += "<li><a href='<?=base_url();?>dashboard/profile/"+data[x]["username"]+"'>"+data[x]["fname"]+" "+data[x]["lname"]+"</a></li>";
  					}
  					$('#find').html(mark);
  				}
  			});
  		});
  	});
  </script>
  
<script>
  $(window).load(function() {
    $("#joyride").joyride({
      /* Options will go here */
     scrollSpeed: 300,
     timer: 5000,
     startTimerOnClick: true,
     //tipAnimation: pop,
     cookieMonster: true,
     cookieName: 'dashboardjoy',
     cookieDomain: false
    });
  });
</script>
</body>
</html>
