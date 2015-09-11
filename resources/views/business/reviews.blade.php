<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Reviews</title>
		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Custom CSS -->
		<link href="/css/style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
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
						<li>
							<a href="/auth/logout">Logout</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="top-container second">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav navbar-right">
							<a href="#">Home</a><a href="#">Businesses</a><a href="#">Gray Filly</a><a href="/reviews" class="active">Reviews</a>
						</ul>
					</div>
					<!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<header>
			<div class="container">
				<div class="col-lg-3"><img src="/images/bg-logo.png" class="upload-logo">
				</div>
				<div class="col-lg-9">
					<h2 class="company-title">Gray Filly</h2>
					<h4 class="company-type">Business Type: Horse Trading & Farming</h4>
					<button type="button" class="btn btn-default green"><img src="/images/icons/chat.png" class="icon">Contact us
					</button>
					<button type="button" class="btn btn-default blue"><img src="/images/icons/double-right-arrow.png" class="icon">Follow
					</button>
				</div>
			</div>
		</header>

		@include('business.profileMenu')
		
		<div class="container">

			<!-- Content Row -->
			<div class="row">
				<!-- Sidebar Column -->
				<div class="col-md-3 sidebar">
					<div class="filter-by list search-list">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <h4 class="list-title">Sort by</h4> </a></h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<ul class="fa-ul no-margin-left">
											<li>
												<a href="#" class="no-color">Newest first</a>
											</li>
											<li>
												<a href="#" class="no-color">Oldest first</a>
											</li>
											<li class="active">
												<a href="#" class="no-color">Ratings (high-low)</a>
											</li>
											<li>
												<a href="#" class="no-color">Ratings (low-high)</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="review-key">
						<span><img src="/images/icons/star-green.png" class="icon">Not so great</span>
						<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Just okay</span>
						<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Pretty good</span>
						<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Great business</span>
						<span><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon"><img src="/images/icons/star-green.png" class="icon">Highly Recommended!</span>
					</div>
				</div>
				<!-- Content Column -->
				<div class="col-md-9 content">
					<h2 class="content-heading"><img src="/images/icons/star-hollow.png" class="icon baseline">Reviews</h2>
				</div>
			</div>
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

		<!-- jQuery -->
		<script src="/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>