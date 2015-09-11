<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Settings</title>
		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Custom CSS -->
		<link href="/css/style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>

	<body id="settings">

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
							<a href="#">Home</a><a href="#">Businesses</a><a href="#">Gray Filly</a><a href="/settings" class="active">Settings</a>
						</ul>
					</div>
					<!--<a class="navbar-brand" href="/index.html">Start Bootstrap</a>-->
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
					<div class="settings no-margin-top">
						<ul class="fa-ul no-margin-left">
							<li class="active">
								<a href="/settings" class="no-color">Business Info</a>
							</li>
							<li>
								<a href="#" class="no-color">Membership level</a>
							</li>
							<li>
								<a href="#" class="no-color">Billing Method</a>
							</li>
							<li>
								<a href="#" class="no-color">Advanced Settings</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Content Column -->
				<div class="col-md-9 content">
					<h2 class="content-heading"><img src="/images/icons/settings.png" class="icon">Settings</h2>
					<div class="business-details business-info-settings">
						<h3 class="content-sub-heading">Business Details <span class="edit-settings pull-right"><a href="#">Edit</a></span></h3>
						<span class="line-of-text"><span>Business Name:</span> Gray Filly</span>
						<span class="line-of-text"><span>Business Type:</span> Farming &amp; Agriculture</span>
						<span class="line-of-text"><span>Membership Level:</span> Basic <span class="upgrade-membership pull-right"><a href="#">Upgrade to Premium. Try it for Free. <img src="/images/icons/right-arrow-color.png"></a></span></span>
					</div>
					<div class="business-contact business-info-settings">
						<h3 class="content-sub-heading">Business Contact <span class="edit-settings pull-right"><a href="#">Edit</a></span></h3>
						<span class="line-of-text"><span>Main Contact:</span> Job Bloggs</span>
						<span class="line-of-text"><span>Email Address:</span> <a href="mailto:name@horsify.com">name@horsify.com</a></span>
						<span class="line-of-text"><span class="address">Address:</span> <span>1 Sample St
								<br>
								Sampletown WA1600
								<br>
								Australia</span></span>
						<span class="line-of-text"><span>Phone:</span>
							<tel>
								0410 000 000
							</tel></span>
					</div>
					<div class="password business-info-settings">
						<h3 class="content-sub-heading">Password <span class="edit-settings pull-right"><a href="#">Edit</a></span></h3>
						<span class="line-of-text"><span>Password:</span> **********</span>
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
		<script>
			$('#photo-1').on('click', function(){
var $$ = $(this)
if( !$$.is('.checked')){
$$.addClass('checked');
$$.removeClass('unchecked');
} else {
$$.removeClass('checked');
$$.addClass('unchecked');
}
})
$('#photo-2').on('click', function(){
var $$ = $(this)
if( !$$.is('.checked')){
$$.addClass('checked');
$$.removeClass('unchecked');
} else {
$$.removeClass('checked');
$$.addClass('unchecked');
}
})
$('#photo-3').on('click', function(){
var $$ = $(this)
if( !$$.is('.checked')){
$$.addClass('checked');
$$.removeClass('unchecked');
} else {
$$.removeClass('checked');
$$.addClass('unchecked');
}
})
$('#photo-4').on('click', function(){
var $$ = $(this)
if( !$$.is('.checked')){
$$.addClass('checked');
$$.removeClass('unchecked');
} else {
$$.removeClass('checked');
$$.addClass('unchecked');
}
})

		</script>
	</body>
</html>