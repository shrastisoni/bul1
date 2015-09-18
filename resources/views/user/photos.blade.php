@extends('user.header')

@section('content')

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
						<a href="all-photos.html" class="no-color">All photos</a>
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
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-1.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">ALL PHOTOS</span>
							<span class="photo-counter"><strong>51</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-2.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">Double Horse Float</span>
							<span class="photo-counter"><strong>05</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-3.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">3 Horse Float</span>
							<span class="photo-counter"><strong>13</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-4.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">Floats With Living</span>
							<span class="photo-counter"><strong>22</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-1.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">ALL PHOTOS</span>
							<span class="photo-counter"><strong>51</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-2.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">Double Horse Float</span>
							<span class="photo-counter"><strong>05</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-3.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">3 Horse Float</span>
							<span class="photo-counter"><strong>13</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				<div class="col-md-3 album">
					<figure>
						<img src="/images/photos-4.png" class="gallery-thumbnail">
						<figcaption>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<img src="/images/icons/options.png" class="options">
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li>
										<a href="#"><span>Edit Album</span><img src="/images/icons/edit.png"></a>
									</li>
									<li>
										<a href="#"><span>Upload Photo</span><img src="/images/icons/upload.png"></a>
									</li>
									<li>
										<a href="#"><span>Share Album</span><img src="/images/icons/share.png"></a>
									</li>
									<li>
										<a href="#"><span>Delete Album</span><img src="/images/icons/delete.png"></a>
									</li>
								</ul>
							</div>
						</figcaption>
					</figure>
					<div class="photo-description">
						<div class="col-lg-9">
							<span class="photo-album">Floats With Living</span>
							<span class="photo-counter"><strong>22</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix spacer"></div>

		</div>
	</div>
	<!-- /.row -->
</div>
@endsection