<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Iksha - Support Services</title>		
		<link rel="shortcut icon" href="assets/favicon.png">
		<link rel="stylesheet" href="assets/bootstrap.min.css">		
		<link href="assets/css" rel="stylesheet">		
		<link rel="stylesheet" href="assets/font-awesome.min.css">
		<link rel="stylesheet" href="assets/themify-icons.css">
		<link rel="stylesheet" href="assets/owl.carousel.css">
		<link rel="stylesheet" href="assets/owl.theme.css">		
		<link rel="stylesheet" href="assets/venobox.css">			
		<link rel="stylesheet" href="assets/animate.css">
		<link rel="stylesheet" href="assets/meanmenu.css">
		<link rel="stylesheet" href="assets/slick.css">	
		<link rel="stylesheet" href="assets/slick-theme.css">	
		<link rel="stylesheet" href="assets/style.css">			
		<link rel="stylesheet" href="assets/responsive.css">
		<link rel="stylesheet" href="assets/switcher.css"> 	
	</head>
    <body data-spy="scroll" data-offset="80">
		<div class="preloader" style="display: none;">
			<div class="status" style="display: none;">
				<div class="status-mes"></div>
			</div>
		</div>
		<div class="navbar navbar-default navbar-fixed-top menu-top menu-shrink">
            <div class="container">
                <div class="navbar-header">        
					<a href="index.php" class="navbar-brand"><img src="assets/logo.png" id="logo" alt="logo"></a>
                </div>
				
				<div class="menu_wrap mainmenu">
					<nav id="navigation" style="display: block;">
						<ul class="nav navbar-nav navbar-right">
                            <li <?=(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == 'index.php')?'class="active current"':'';?>><a href="index.php">Home</a></li>
							<li <?=(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == 'about.php')?'class="active current"':'';?>><a href="about.php">About Us</a></li>
							<li <?=(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == 'service.php')?'class="active current"':'';?>><a href="service.php">Services</a></li>														
							<li <?=(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == 'contact.php')?'class="active current"':'';?>><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>			
				</div> 
            </div>
        </div> 
