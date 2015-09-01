@extends('app')

@section('content')
<div class="row content" >
	<h2 class="content-heading"><img src="/images/icons/album-2.png" class="icon">Business</h2>
	@foreach($businesses as $b)
		<div class="col-md-4 album">
			<a href="/business/{{$b->id}}">
			<figure>
				<img src="{{$b->profilePhotoPath}}" class="gallery-thumbnail">
			</figure>
				<div class="col-lg-9">
					<span class="photo-album">{{$b->name}}</span>
					<span class="photo-counter"><strong>Website:</strong> {{$b->website}}</span>
				</div>
				<div class="col-lg-3 go">
				</div>
			</a>
		</div>
	@endforeach
	<div class="clearfix spacer"></div>
</div>
@endsection
