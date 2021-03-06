@extends('app')

@section('content')

<header style="background-image: url(/images/bg-shadow.png), url({{$business->coverPhotoPath}});">
	<div class="container">
		<div class="col-lg-3"><img src="{{$business->profilePhotoPath}}" class="upload-logo">
		</div>
		<div class="col-lg-9">
			<h2 class="company-title">{{$business->name}}</h2>
			<h4 class="company-type">Business Type: {{$business->type}}</h4>
			<button type="button" class="btn btn-default green"><img src="/images/icons/chat.png" class="icon">Contact us
			</button>
			<button onclick="followIt('business', {{$business->id}})" type="button" class="btn btn-default blue"><img src="/images/icons/double-right-arrow.png" class="icon">Follow
			</button>
		</div>
	</div>
</header>

<!-- Page Content -->
<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<a href="{{route('business.show', $business->id)}}">Profile</a>
			</li>
			<li>
				<a href="{{route('photos.show', $business->id)}}" class="active">Photos</a>
			</li>
			<li>
				<a href="#">Connections</a>
			</li>
			<li>
				<a href="#">Reviews</a>
			</li>
			<li>
				<a href="#">Messages</a>
			</li>
			<li>
				<a href="#">Settings</a>
			</li>
			<li>
				<a href="#">Our Feed</a>
			</li>
		</ul>
	</div>
</div>

<div class="container"> 
  <!-- Content Row -->
  <div class="row"> 
    <!-- Sidebar Column -->
    <div class="col-md-3 sidebar">
      <div class="photo-upload no-margin-top">
        <ul class="fa-ul no-margin-left">
          <li><a href="#" class="no-color"><img src="/images/icons/album.png" class="icon">Create Album</a></li>
          <li><a href="#" class="no-color"><img src="/images/icons/file-upload.png" class="icon">Upload Photo</a></li>
          <li><a href="#" class="no-color"><img src="/images/icons/file-upload.png" class="icon">Upload Video</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="list album">
        <h4 class="list-title">Albums</h4>
        <ul class="fa-ul no-margin-left">
          <li><a href="all-photos.html" class="no-color">All photos</a></li>
          <li><a href="#" class="no-color">Double Horse Float</a></li>
          <li class="active"><a href="#" class="no-color">3 Horse float</a></li>
          <li><a href="#" class="no-color">Floats with living</a></li>
          <li><a href="#" class="no-color">Goosenecks</a></li>
          <li><a href="#" class="no-color">Videos</a></li>
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
      </div>
      <div class="clearfix spacer"></div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection
