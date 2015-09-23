<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Profile - Individual</title>

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
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
								$classActive = '';
							?>
							<a href="/">Home</a>
							@foreach($sections as $section)
								@if($section == '{id}')
								<a href="/user/{{$user->userName}}/profile" >{{$user->name}}</a>
								<?php 
									$classActive = 'class="active"'; 
									$UrlPath = $UrlPath . $user->userName . '/';
								?>
								@else
									<?php
										if ($UrlPath != '#') 
										{
											$UrlPath = $UrlPath . $section . '/';
										}
		 							?>
								<a href="{{$UrlPath}}" <?php echo $classActive ?>>{{ucfirst($section)}}</a>
								@endif
							@endforeach	
						</ul>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<header style="background-image: url(/images/bg-shadow.png), url({{$user->coverPicPath}});">
			<div class="container">
				<div class="col-lg-3"><img src="/images/bg-logo.png" class="upload-logo">
				</div>
				<div class="col-lg-9">
					<h2 class="company-title">{{$user->name}}</h2>
					<h4 class="company-type">{{$user->type}}</h4>
					<a href="#">
					<button type="button" class="btn btn-default green"><img src="/images/icons/chat.png" class="icon">Message
					</button></a><a href="#">
					<button type="button" class="btn btn-default blue"><img src="/images/icons/double-right-arrow.png" class="icon">Connect
					</button></a>
				</div>
			</div>
		</header>

		@include('user.profileMenu')

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

		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap.min.js"></script>

	</body>
</html>