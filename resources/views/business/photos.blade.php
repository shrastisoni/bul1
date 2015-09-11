<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Horsify | Photos</title>
		<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Custom CSS -->
		<link href="/css/style.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>

	<body id="photos">
		<!-- Create Album Modal -->
		<div class="modal fade" id="create-album" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title content-heading" id="myModalLabel"><img src="/images/icons/album.png" class="icon">Create a new Album</h4>
					</div>
					<div class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary">
							Save changes
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Create Album Modal -->
		<!-- Upload Photo Modal -->
		<div class="modal fade" id="upload-photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><img src="/images/icons/close.png"></span>
						</button>
						<h4 class="modal-title content-heading" id="myModalLabel"><img src="/images/icons/upload-2.png" class="icon">Upload Photos</h4>
					</div>
					<div class="modal-body">
						<div class="col-lg-9 no-padding">
							<div class="col-lg-5 uploaded-image no-padding"><img src="/images/upload-photo.png">
							</div>
							<div class="col-lg-7 uploaded-image-meta">
								<form action="#" name="upload-image-meta">
									<textarea name="describe_photo" placeholder="Describe this photo..."></textarea>
									<select name="add_to_existing_album">
										<option value="" disabled="" selected="">Add to existing album...</option>
										<option value="double_horse_float">Double Horse Float</option>
										<option value="3_horse_float">3 Horse Float</option>
										<option value="floats_with_living">Floats with Living</option>
										<option value="goosenecks">Goosenecks</option>
									</select>
									<select name="discipline">
										<option value="" disabled="" selected="">Choose discipline (if relevant)</option>
									</select>
								</form>
							</div>

						</div>
						<div class="col-lg-9 no-padding">
							<div class="col-lg-5 uploaded-image no-padding"><img src="/images/upload-photo.png">
							</div>
							<div class="col-lg-7 uploaded-image-meta">
								<form action="#" name="upload-image-meta">
									<textarea name="describe_photo" placeholder="Describe this photo..."></textarea>
									<select name="add_to_existing_album">
										<option value="" disabled="" selected="">Add to existing album...</option>
										<option value="double_horse_float">Double Horse Float</option>
										<option value="3_horse_float">3 Horse Float</option>
										<option value="floats_with_living">Floats with Living</option>
										<option value="goosenecks">Goosenecks</option>
									</select>
									<select name="discipline">
										<option value="" disabled="" selected="">Choose discipline (if relevant)</option>
									</select>
								</form>
							</div>

						</div>
						<div class="col-lg-9 no-padding">
							<div class="col-lg-5 uploaded-image no-padding"><img src="/images/upload-photo.png">
							</div>
							<div class="col-lg-7 uploaded-image-meta">
								<form action="#" name="upload-image-meta">
									<textarea name="describe_photo" placeholder="Describe this photo..."></textarea>
									<select name="add_to_existing_album">
										<option value="" disabled="" selected="">Add to existing album...</option>
										<option value="double_horse_float">Double Horse Float</option>
										<option value="3_horse_float">3 Horse Float</option>
										<option value="floats_with_living">Floats with Living</option>
										<option value="goosenecks">Goosenecks</option>
									</select>
									<select name="discipline">
										<option value="" disabled="" selected="">Choose discipline (if relevant)</option>
									</select>
								</form>
							</div>

						</div>
						<div class="col-lg-9 no-padding">
							<div class="col-lg-5 uploaded-image no-padding">
								<a href="#"><img src="/images/upload-photo-add-more.png"></a>
							</div>
						</div>
					</div>
					<div class="modal-footer no-padding-right">
						<a href="#">
						<button type="button" class="btn btn-default btn-primary gray text-uppercase">
							Add to Album and Close
						</button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Upload Photo Modal -->

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
							<a href="#">Home</a><a href="/search">Search</a><a href="#" class="active">Search Results</a>
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
					<h2 class="company-title">This is a Really Big Name</h2>
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
					<div class="photo-upload no-margin-top">
						<ul class="fa-ul no-margin-left">
							<li>
								<a href="#" class="no-color" data-toggle="modal" data-target="#create-album"><img src="/images/icons/album.png" class="icon">Create Album</a>
							</li>
							<li>
								<a href="#" class="no-color" data-toggle="modal" data-target="#upload-photo"><img src="/images/icons/file-upload.png" class="icon">Upload Photo</a>
							</li>
							<li>
								<a href="#" class="no-color"><img src="/images/icons/file-upload.png" class="icon">Upload Video</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="list album">
						<h4 class="list-title">Albums</h4>
						<ul class="fa-ul no-margin-left">
							<li>
								<a href="/all-photos" class="no-color">All photos</a>
							</li>
							<li>
								<a href="#" class="no-color">Double Horse Float</a>
							</li>
							<li class="active">
								<a href="#" class="no-color">3 Horse float</a>
							</li>
							<li>
								<a href="#" class="no-color">Floats with living</a>
							</li>
							<li>
								<a href="#" class="no-color">Goosenecks</a>
							</li>
							<li>
								<a href="#" class="no-color">Videos</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Content Column -->
				<div class="col-md-9 content">
					<h2 class="content-heading"><img src="/images/icons/album-2.png" class="icon">Albums</h2>
					<div class="photo-gallery">
						@foreach($albums as $album)
				        <div class="col-md-3 album">
				          <figure> <img src="{{$album->path}}" class="gallery-thumbnail">
				            <figcaption>
				              <div class="dropdown">
				                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="/images/icons/options.png" class="options"> </button>
				                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				                  <li><a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a></li>
				                  <li><a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a></li>
				                  <li><a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a></li>
				                  <li><a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a></li>
				                </ul>
				              </div>
				            </figcaption>
				          </figure>
				          <div class="photo-description">
				            <div class="col-lg-9"> <span class="photo-album">ALL PHOTOS</span>
				              <span class="photo-counter"><strong>{{$album->linkWith}}</strong> Photos</span> </div>
				            <div class="col-lg-3 go"><a href="#"> </a></div>
				          </div>
				        </div>
				        @endforeach
					<div class="clearfix spacer"></div>

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