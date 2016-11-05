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
	<title>BeginnerSite - Home</title>
	
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
	
<!-- carousel-holder -->	
<div class="row carousel-holder">
	<div class="col-md-12">
		<div class="row">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<img class="slide-image" src="./resources/images/1920x400.png" alt="1920x400 image">
					</div>
					<div class="item active">
						<img class="slide-image" src="./resources/images/1920x400.png" alt="1920x400 image">
					</div>
					<div class="item ">
						<img class="slide-image" src="./resources/images/1920x400.png" alt="1920x400 image">
					</div>
					<div class="item">
						<img class="slide-image" src="./resources/images/1920x400.png" alt="1920x400 image">
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
</div><!-- /.carousel-holder -->
	
<!-- Page Content -->
<div class="container">	
	<hr />
	
	<div class="row">
	
		<div class="col-md-4 col-md-push-8">
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>
		</div>
		
		<div class="col-md-8 col-md-pull-4">
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<h2>Heading 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
			<a class="btn btn-default" href="#">More Info</a>
		</div>
		<!-- /.col-md-4 -->
		<div class="col-md-4">
			<h2>Heading 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
			<a class="btn btn-default" href="#">More Info</a>
		</div>
		<!-- /.col-md-4 -->
		<div class="col-md-4">
			<h2>Heading 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
			<a class="btn btn-default" href="#">More Info</a>
		</div>
		<!-- /.col-md-4 -->
	</div>
	
	
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