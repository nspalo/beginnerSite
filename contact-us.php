<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"    content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author"      content="">
	<!-- 
		BeginnerSite
		- Simple Page for Beginners to start using bootstrap 
		- Noel Palo - noelspalo@gmail.com, https://github.com/nspalo/
	-->	
	<title>BeginnerSite - Contact us</title>
	
	<!-- Font Awesome Core CSS -->
	<link rel="stylesheet" type="text/css" href="./resources/css/font-awesome-4.6.3/font-awesome.css" >
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="./resources/css/bootstrap-3.3.6/bootstrap.css">	
	
	<!-- Custom StyleSheet -->
	<link rel="stylesheet" type="text/css" href="./resources/css/custom-style.css">	
		
	<!-- jQuery -->
    <script type="text/javascript" src="./resources/js/jquery-2.1.4/jquery-2.1.4.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="./resources/js/bootstrap-3.3.6/bootstrap.min.js"></script>
</head>
<body>

<!-- Page Content -->
<div class="container-fluid">
	
<!-- Navigation -->
<nav class="navbar navbar-default nav-left pi-mega navbar-fixed-top" role="navigation">				
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nspNavi">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">BeginnerSite</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->		
		<div id="nspNavi" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about-us.php">About us</a>
				</li>				
				<li>
					<a href="contact-us.php">Contact us</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href           = "#"
						data-toggle   = "modal"
						data-backdrop = "static" 
						data-keyboard = "false"
						data-target   = "#signup"
					><span class="glyphicon glyphicon-user"></span> Sign Up</a>
				</li>
				<li>
					<a href           = "#"
						data-toggle   = "modal"
						data-backdrop = "static" 
						data-keyboard = "false"
						data-target   = "#signin"
					><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
			</ul>
			
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<!-- Navigation -->	

	<div class="container page-content">

		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Contact us
					<small>Subheading</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a>
					</li>
					<li class="active">Contact us</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    1234 Some Place<br>Under the sky, you can't find<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                        <div class="help-block"></div></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required="" data-validation-required-message="Please enter your email address.">
                        <div class="help-block"></div></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        <div class="help-block"></div></div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

	<hr />
	<!-- Page Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright © BeginnerSite 2016</p>
			</div>
			<!-- /.col-lg-12 -->
		</div><!-- /.row -->
	</footer>
	<!-- Page Footer -->
</div>
<!-- Page Content -->

</div><!-- /.container -->
<!-- Page Content -->

</body>
</html>