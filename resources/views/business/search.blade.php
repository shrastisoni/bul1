<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Search</title>
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

		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>

<body id="search-page">

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
							<a href="/">Home</a><a href="/search">Search</a><a href="#" class="active">Search Results</a>
						</ul>
					</div>
					<!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
<!-- End Navigation -->
<!-- Header -->
<header class="search-page">
  <div class="container">
<form id="search-form">
<span class="make-a-search">Make a Search:</span><input name="Keyword" type="text" class="keyword" placeholder="Keyword"><input name="Location" type="text" class="location" placeholder="Location"><select name="Any Category" class="any-category"><option value="1">Any Category</option><option value="2">Option 2</option></select><input name="Search Listings" type="submit" class="submit" value="Search Listings">
</form>
  </div>
</header>
<!-- End Header -->
<!-- Page Content -->
<!-- Main Content -->
<div class="container main-content">
			<h2 class="content-heading">32 [category] servicing [location] with keywords [keywords & keywords] <span class="toolbar pull-right search-toolbar">Showing Results 1 - 8 of 50
				<div class="list-mode">
					<a href="search-list.html"> </a>
				</div>
				<div class="grid-mode active">
					<a href="search.html"> </a>
				</div></span></h2>
			<!-- Content Row -->
			<div class="row no-margin">
				<!-- Sidebar Column -->
				<div class="col-md-2 search-sidebar sidebar no-padding-left">
					<div class="filter-by list search-list">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <h4 class="list-title">Filter by</h4> </a></h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<ul class="fa-ul no-margin-left">
											<li>
												<a href="#" class="no-color">Kitchen</a>
											</li>
											<li>
												<a href="#" class="no-color">Bath</a>
											</li>
											<li class="active">
												<a href="#" class="no-color">Interior Designers &amp; Decorators</a>
											</li>
											<li>
												<a href="#" class="no-color">Living</a>
											</li>
											<li>
												<a href="#" class="no-color">Dining</a>
											</li>
											<li>
												<a href="#" class="no-color">Outdoor</a>
											</li>
											<li>
												<a href="#" class="no-color">Kids</a>
											</li>
											<li>
												<a href="#" class="no-color">Bathroom Designers &amp; Renovators</a>
											</li>
											<li>
												<a href="#" class="no-color">Storage &amp; Closet</a>
											</li>
											<li>
												<a href="#" class="no-color">Exterior</a>
											</li>
											<li>
												<a href="#" class="no-color">More Rooms...</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-by list search-list">
						<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <h4 class="list-title">Style</h4> </a></h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<ul class="fa-ul no-margin-left">
											<li>
												<a href="#" class="no-color">Kitchen</a>
											</li>
											<li>
												<a href="#" class="no-color">Bath</a>
											</li>
											<li class="active">
												<a href="#" class="no-color">Bedroom</a>
											</li>
											<li>
												<a href="#" class="no-color">Living</a>
											</li>
											<li>
												<a href="#" class="no-color">Dining</a>
											</li>
											<li>
												<a href="#" class="no-color">Outdoor</a>
											</li>
											<li>
												<a href="#" class="no-color">Kids</a>
											</li>
											<li>
												<a href="#" class="no-color">Home</a>
											</li>
											<li>
												<a href="#" class="no-color">Office</a>
											</li>
											<li>
												<a href="#" class="no-color">Storage & Closet</a>
											</li>
											<li>
												<a href="#" class="no-color">Exterior</a>
											</li>
											<li>
												<a href="#" class="no-color">More Rooms...</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content Column -->
				<div class="col-md-10 search-content content no-padding-right">
					<div class="search-results grid">
						@foreach($businesses as $business)
							<div class="col-md-6">
								<div class="information">
									<img src="{{$business->coverPicPath}}" class="gallery-thumbnail">
									<div class="meta-information">
										<span class="search-business-name"><a href = "/business/{{$business->userName}}/profile">{{$business->name}}</a></span><span class="pro">- PRO</span>
										<br>
										<span class="address">
											{{$business->location}}
										</span>
										<span class="contact">{{$business->phone}}</span>
									</div>
									<div class="shadow"></div>
	
								</div>
								<div class="listing-reviews">
									<span class="reviews pull-left"><img src="/images/icons/4-star.png" class="icon">15 reviews</span>
									<span class="follow pull-right"><a href="#"></a></span>
								</div>
							</div>
						@endforeach
					</div>
					<div class="clearfix spacer"></div>

				</div>
			</div>
			<div class="row no-margin">
				<div class="pagination col-lg-12">
					<span class="previous"><a href="#">Prev</a></span>
					<span class="page-numbers"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <span class="page-hellip">&hellip;</span> <a href="#">48</a> <a href="#">49</a> <a href="#">50</a> </span>
					<span class="next"><a href="#">Next</a></span>
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
		<!-- End Main Content -->
		<!-- End Page Content -->

		<!-- jQuery -->
		<script src="/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>