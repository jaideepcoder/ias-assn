<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="<?= $description; ?>" />
		<meta name="keywords" content="<?= $keywords; ?>" />
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="<?= base_url(); ?>css/style.css" type="text/css" />
		<link rel="icon" type="image/ico" href="<?= base_url(); ?>images/app.ico">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>js/app.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="header">
			<div id="heading">IAS Portal</div>
			<div id="control">
				<img src="http://res.cloudinary.com/demo/image/facebook/w_50,h_50,c_fill/jaideep.kiler.jpg" />
				Welcome, Jaideep!
			</div>
			<div id="search">
				<input type="text" alt="Search" autofocus="true" name="search" id="searchinput" placeholder="Your search goes here.."/>
				<input type="submit" value="Search" id="searchsubmit"/>
			</div>
		</div>
	</body>
</html>
