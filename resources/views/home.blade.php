<!doctype html>
<html>
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
		<link href="/css/home.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>

	<body id="home">
		<div class="intro">
			<div class="intro-text cf">
				<!-- Navigation -->
				<nav class="navbar top" role="navigation">
					<div class="top-container first">
						<div class="navbar-header">
							<button type="button" class="btn btn-default top-bar-categories white">
								Browse Categories
							</button>
						</div>
						<div class="logo">
							<a href="/"><img src="/images/horsify-logo-white.png"></a>
						</div>
						<div class="account">
							<ul class="nav navbar-nav navbar-right top-nav-first">
								<li>
									<a href="/search"><i class="fa fa-search"></i></a>
								</li>
								@if(!Auth::check())
								<li>
									<a href="/auth/login">Log in</a>
								</li>
								<li>
									<a href="/auth/register">Join now</a>
								</li>
								@else
								<li>
									<a href="/auth/logout">Logout</a>
								</li>
								@endif
							</ul>
						</div>
					</div>
				</nav>
				<!-- End Navigation -->
				<!-- Search -->
				<div class="home-search">
					<form name="home-search" action="#" id="search-form">
						<h1>All the best Horse people in one place</h1>
						<input name="Keyword" type="text" class="keyword" placeholder="Keyword">
						<input name="Location" type="text" class="location" placeholder="Location">
						<select name="Any Category" class="any-category">
							<option value="1" selected>Any Category</option>
							<option value="2">Option 2</option>
						</select>
						<input name="Search Listings" type="submit" class="submit" value="Search Listings">
					</form>
				</div>
				<!-- End Search -->
				<!-- Scroll Down -->
				<div class="scroll-down">
					<a href="#join-now" class="no-color">
					<div class="mouse">
						<div class="wheel"></div>
					</div> <span>SCROLL DOWN</span></a>
				</div>
				<!-- End Scroll Down -->
			</div>
			<div class="feed-overlay"></div>
		</div>
		<div id="join-now"></div>
		<!-- Services Content -->
		<div class="container main-content">

			<!-- Content Row -->
			<div class="row text-center">
				<!-- Content Column -->
				<div class="col-md-4">
					<img src="/images/icons/business.png">
					<h3 class="light">Find a Business</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt risus in diam hendrerit convallis. Integer eget auctor velit.
					</p>
					<a href="#">
					<button type="button" class="btn btn-default blue">
						Join Now
					</button></a>
				</div>
				<div class="col-md-4">
					<img src="/images/icons/individual.png">
					<h3 class="light">Individuals</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt risus in diam hendrerit convallis. Integer eget auctor velit.
					</p>
					<a href="#">
					<button type="button" class="btn btn-default blue">
						Join Now
					</button></a>
				</div>
				<div class="col-md-4">
					<img src="/images/icons/club.png">
					<h3 class="light">Club</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt risus in diam hendrerit convallis. Integer eget auctor velit.
					</p>
					<a href="#">
					<button type="button" class="btn btn-default blue">
						Join Now
					</button></a>
				</div>
				<!-- End Content Column -->
			</div>
			<!-- /.row -->
		</div>
		<!-- End Services Content -->
		<!-- Social -->
		<div class="container-fluid home-social">
			<div class="container">
				<div class="social-connections">
					<h3 class="text-uppercase text-center light white">Get Horsified</h3>
					<span><a href="#"><img src="/images/icons/facebook-2.png"></a></span><span><a href="#"><img src="/images/icons/twitter-2.png"></a></span><span><a href="#"><img src="/images/icons/email.png"></a></span>
				</div>
			</div>
		</div>
		<!-- End Social -->
		<!-- Featured -->
		<div class="container featured text-center">
			<div class="col-md-3">
				<h3>Trending Photos</h3>
				<div class="home-featured">
					<img src="/images/featured-1.png">
				</div>
				<a href="#">
				<button type="button" class="btn btn-default white hollow">
					Explore &rsaquo;
				</button></a>
			</div>
			<div class="col-md-3">
				<h3>Featured Business</h3>
				<div class="home-featured">
					<img src="/images/featured-2.png">
				</div>
				<a href="#">
				<button type="button" class="btn btn-default white hollow">
					Explore &rsaquo;
				</button></a>
			</div>
			<div class="col-md-3">
				<h3>Featured Article</h3>
				<div class="home-featured">
					<img src="/images/featured-3.png">
					<div class="feed-overlay text-left">
						<span class="post-title">Australian team in Poland for the FEI Nations Cup Eventing Series. </span>
						<span class="post-meta">Posted by <span class="bold">Amelie Patrux</span>
							<br>
							16/06/2015</span>
					</div>
				</div>
				<a href="#">
				<button type="button" class="btn btn-default white hollow">
					Explore &rsaquo;
				</button></a>
			</div>
			<div class="col-md-3 latest-forum">
				<h3>Latest from Forum</h3>
				<div class="home-featured">
					<img src="/images/featured-4.png">
					<div class="feed-overlay text-left">
						<span class="post-title">Important notice to Eventing riders in Sydney area.</span>
						<span class="post-meta">Posted by <span class="bold">Kate Borg</span>
							<br>
							In: Notices & Announcements
							<br>
							18/06/2015</span>
					</div>
				</div>
				<a href="#">
				<button type="button" class="btn btn-default white hollow">
					Explore &rsaquo;
				</button></a>
			</div>
		</div>
		<!-- End Featured -->

		<!-- Footer -->
		<div class="container">
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
		<script type="text/javascript">
var images = ['home-bg1.jpg', 'home-bg2.jpg', 'home-bg3.jpg', 'home-bg4.jpg', 'home-bg5.jpg'];
$('.intro-text').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
		</script>
		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>