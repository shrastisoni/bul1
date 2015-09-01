<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Horsify | Home</title>
	
	<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/bootstrap.css">
	
	<!-- Custom CSS -->
	<link href="/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/fresco/fresco.css"/>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<style>
	#background 
	{
		position: absolute;
	    left: 0px;
	    top: 0px;
	    background-size: cover;
	    width: 100%;
	    height: 100%;
	    min-height: 860px;
	    -webkit-user-select: none;
	    -khtml-user-select: none;
	    -moz-user-select: none;
	    -o-user-select: none;
	    user-select: none;
	    z-index: 0;
	
	}
	</style>
</head>
<body id="home">
		<div id="background"></div>

		<!-- Navigation -->
		<nav class="navbar top" role="navigation">
  			<div class="top-container first">
				<div class="navbar-header">
					<button type="button" class="btn btn-default top-bar-categories blue">
						Browse Categories
					</button>
				</div>
				<div class="logo">
					<a href="#"><img src="/images/horsify-logo.png"></a>
				</div>
				<div class="account">
					<ul class="nav navbar-nav navbar-right top-nav-first">
						<li>
							<a href="search.html"><i class="fa fa-search"></i></a>
						</li>
						<li>
							<a href="#">Log in</a>
						</li>
						<li>
							<a href="#">Join now</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="top-container second">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right">
							<a href="/" @if(!Auth::check()) class="active" @endif>Home</a><a href="/business">Businesses</a>@if(Auth::check())<a href="#" class="active">Gray Filly</a>@endif
						</ul>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		@if(isset($business))
		<header style="background-image: url(/images/bg-shadow.png), url({{$business->coverPhotoPath}});">
			<div class="container">
				<div class="col-lg-3"><img src="{{$business->profilePhotoPath}}" class="upload-logo">
				</div>
				<div class="col-lg-9">
					<h2 class="company-title">{{$business->name}}</h2>
					<h4 class="company-type">Business Type: {{$business->type}}</h4>
					<button type="button" class="btn btn-default green"><img src="/images/icons/chat.png" class="icon">Contact us
					</button>
					<button type="button" class="btn btn-default blue"><img src="/images/icons/double-right-arrow.png" class="icon">Follow
					</button>
				</div>
			</div>
		</header>
		@endif
		<!-- Page Content -->
		<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
			<div class="container">
				<ul class="nav navbar-nav">
					<li>
						<a href="profile.html" class="active">Profile</a>
					</li>
					<li>
						<a href="photos.html">Photos</a>
					</li>
					<li>
						<a href="connections.html">Connections</a>
					</li>
					<li>
						<a href="reviews.html">Reviews</a>
					</li>
					<li>
						<a href="messages.html">Messages</a>
					</li>
					<li>
						<a href="settings.html">Settings</a>
					</li>
					<li>
						<a href="our-feed.html">Our Feed</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<!-- Content Row -->
			@yield('content')
			<!-- /.row -->
			<!-- Footer -->
  			<footer>
			<div class="footer-logo">
				<img src="/images/horsify-footer.png">
			</div>
			<div class="row footer-menu">
				<div class="col-lg-12">
					<a href="#">Horsify Info </a><a href="#">Contact Us </a><a href="#">Privacy Policy </a><a href="#">Site map </a><a href="#">How it works </a><a href="#">Articles </a>
				</div>
			</div>
			<div class="row copyright">

				<div class="col-lg-12">
					<p>
						&copy; 2015 Horsify Australia. All rights reserved.
					</p>
				</div>
			</div>
		</footer>
		</div>
	<!-- Scripts -->
	<script src="/js/jquery.js"></script>
	<script type="text/javascript">
		var images = ['home-bg1.jpg', 'home-bg2.jpg', 'home-bg3.jpg', 'home-bg4.jpg', 'home-bg5.jpg'];
		$('#background').css({
			'background-image' : 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'
		});
	</script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/js/bootstrap.min.js"></script>

	<!-- Script for lightbox gallery -->
	<script type="text/javascript" src="/fresco/fresco.js"></script>
</body>
</html>
