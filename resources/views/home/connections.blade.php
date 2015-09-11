<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Connections</title>

		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Custom CSS -->
		<link href="/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/fresco/fresco.css"/>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>

	<body id="page-connections">

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
							<a href="#">Home</a><a href="#">Businesses</a><a href="#">Gray Filly</a><a href="#" class="active">Connections</a>
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
				<div class="col-md-3 sidebar">
					<div class="search no-margin-top">
						<form action="#">
							<input type="text" class="search" id="search" placeholder="Search Connections">
							<input type="image" name="submit" src="/images/icons/search.png" border="0" alt="Submit" />
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="filter-by list">
						<h4 class="list-title">Filter by</h4>
						<ul class="fa-ul no-margin-left">
							<li>
								<a href="#" class="no-color">First Name</a>
							</li>
							<li>
								<a href="#" class="no-color">Last Name</a>
							</li>
							<li class="active">
								<a href="#" class="no-color">New</a>
							</li>
							<li>
								<a href="#" class="no-color">Pending</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Content Column -->
				<div class="col-md-9 content">
					<h2 class="content-heading"><img src="/images/icons/social-circle-dark.png" class="icon">[Business Name]'s Connections</h2>
					<h3 class="content-sub-heading">Following <span class="counter blue">(40)</span></h3>
					<div class="photo-selection">
						<div class="col-md-3">
							<figure>
								<img src="/images/following-1.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-2.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-3.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-4.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-1.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-2.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-3.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/following-4.png"  class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								<div class="col-lg-9">
									<span class="business-name">Business Name</span>
									<span class="business-type">Business Type</span>
								</div>
								<div class="col-lg-3 go">
									<a href="#"> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix spacer"></div>
					<h3 class="content-sub-heading">Followers <span class="counter blue">(40)</span></h3>
					<div class="photo-selection followers">
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-1.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-2.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-3.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-4.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-1.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-2.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-3.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
						<div class="col-md-3">
							<figure>
								<img src="/images/followers-4.png" class="gallery-thumbnail" />
								<figcaption>
									<table class="follow-overlay">
										<tr>
											<td>
											<div class="follow-events">
												<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
												<br>
												<a href="#" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
											</div></td>
										</tr>
									</table>
								</figcaption>
							</figure>
							<div class="photo-description">
								Individual Name
							</div>
						</div>
					</div>
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

		<!-- Script for lightbox gallery -->
		<script type="text/javascript" src="/fresco/fresco.js"></script>
	</body>
</html>