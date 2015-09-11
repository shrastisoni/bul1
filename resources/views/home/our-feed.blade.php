<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Our Feed</title>
		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/masonry.css">

		<!-- Custom CSS -->
		<link href="/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/fresco/fresco.css"/>
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
							<a href="#">Home</a><a href="#">Businesses</a><a href="our-feed.html" class="active">Our Feed</a>
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

		@include('home.profileMenu')
		
		<div class="container">

			<!-- Content Row -->
			<div class="row">
				<!-- Sidebar Column -->
				<div class="col-md-12 content">
					<h2 class="content-heading"><img src="/images/icons/feed.png" class="icon">Our Feed</h2>
					<div class="masonry-row">
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-1.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-2.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-1.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-3.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-4.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-5.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-4.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-1.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-4.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-2.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-1.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-6.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-3.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-2.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-1.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-6.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-1.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-3.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-business-1.png" class="feed-business-name"> Business Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-4.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">22</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-2.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="well">
								<div class="feed-gallery">
									<div class="feed-gallery-img">
										<img src="/images/feed-2.png">
										<div class="feed-like">
											<a href="#"></a><span class="feed-number-of-likes">102</span>
										</div>
										<div class="feed-overlay"></div>
									</div>
									<div class="feed-gallery-meta">
										<span class="feed-comment">This is a comment about a photo or video.....</span><span class="feed-comment-timestamp">08/04/15 - 14:00</span><span class="feed-commentor"><img src="/images/feed-individual-1.png" class="feed-individual-name"> Individual Name</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content Column -->
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

		<!-- Script for lightbox gallery -->
		<script type="text/javascript" src="/fresco/fresco.js"></script>
	</body>
</html>