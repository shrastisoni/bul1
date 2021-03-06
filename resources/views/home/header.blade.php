<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Profile</title>

		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" href="/images/apple-touch-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-iphone4.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-ipad-retina.png" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Custom CSS -->
		
		<link href="/css/style.css" rel="stylesheet">
		<!-- CSS for vertical Tabs -->
		
		<link rel="stylesheet" href="/css/bootstrap.vertical-tabs.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">
	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar top" role="navigation">
			<div class="top-container first">
				<div class="navbar-header">
					<button type="button" class="btn btn-default top-bar-categories blue">
						Browse Categories
					</button>
				</div>
				<div class="logo">
					<a href="/"><img src="/images/horsify-logo.png"></a>
				</div>
				<div class="account">
					<ul class="nav navbar-nav navbar-right top-nav-first">
						<li>
							<a href="/search"><i class="fa fa-search"></i></a>
						</li>
						@if(Auth::check())
						<li>
							<a href="/auth/logout">Logout</a>
						</li>
						@else
						<li>
							<a href="/auth/login">Log in</a>
						</li>
						<li>
							<a href="/auth/register">Join now</a>
						</li>
						@endif
					</ul>
				</div>
			</div>
			<div class="top-container second">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right">
							<?php 
								$UrlPath = '/'; 
								$sections = explode("/", Route::getCurrentRoute() -> getPath()); 
							?>
							<a href="/">Home</a>
							@foreach($sections as $section)
								<?php
									if ($UrlPath != '#') 
									{
										$UrlPath = $UrlPath . $section . '/';
									}
	 							?>
							<a href="{{$UrlPath}}" class="active">{{ucfirst($section)}}</a>
							@endforeach	
						</ul>
					</div>
					<!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<header style="background-image: url(/images/bg-shadow.png), url({{$business->coverPicPath}});">
			<div class="container">
				<div class="col-lg-3"><img src="{{$business->profilePicPath}}" class="upload-logo">
				</div>
				<div class="col-lg-9">
					<h2 class="company-title">{{$business->name}}</h2>
					<h4 class="company-type">@if($business->businessId) Business Type: {{$business->type}} @else {{$business->type}} @endif</h4>
					<button type="button" class="btn btn-default green"><img src="/images/icons/chat.png" class="icon">Contact us
					</button>
					<button type="button" class="btn btn-default blue"><img src="/images/icons/double-right-arrow.png" class="icon">Follow
					</button>
				</div>
			</div>
		</header>

		@include('home.profileMenu')
		
		@yield('content')
		
		<div class="container">
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

		<!-- jQuery -->
		<script src="/js/jquery.js"></script>
		<script src="/js/angular.min.js"></script>
		<script src="/js/controllers/homeController.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/dropzone.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.0/angular-sanitize.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>	
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script> <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="external/jquery/jquery.js"></script>
		<script src="external/jquery/jquery-ui.js"></script>
		<script src="/js/jquery.emoji.js"></script>
	</body>
</html>
	