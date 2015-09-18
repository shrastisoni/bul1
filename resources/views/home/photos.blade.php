@extends('home.header')

@section('content')
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
					<figure>
						<img src="{{$album->path}}" class="gallery-thumbnail">
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
							<span class="photo-counter"><strong>{{$album->linkWith}}</strong> Photos</span>
						</div>
						<div class="col-lg-3 go">
							<a href="#"> </a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="clearfix spacer"></div>

		</div>
	</div>
	<!-- /.row -->
</div>
@endsection