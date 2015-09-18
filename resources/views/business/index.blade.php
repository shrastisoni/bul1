@extends('app')

@section('content')

<div class="row content" >
	<div class="col-md-12">
		<h2 class="content-heading"><img src="/images/icons/social-circle.png" class="icon connections">Business Accounts</h2>
		<div class="photo-selection">
			@foreach($businesses as $b)
			<div class="col-md-3">
				<figure>
					<img src="{{$b->profilePhotoPath}}" class="gallery-thumbnail" />
					<figcaption>
						<table class="follow-overlay">
							<tr>
								<td>
								<div class="follow-events">
									<a href="#" class="no-color"><span><img src="/images/icons/chat.png" class="icon"></span>Message</a>
									<br>
									<a href="business/{{$b->uName}}/profile" class="no-color"><span><img src="/images/icons/file.png" class="icon"></span>View Profile</a>
									<br>
									<a onclick="followIt('business', {{$b->id}})" class="no-color"><span><img src="/images/icons/unfollow.png" class="icon"></span>Unfollow</a>
								</div></td>
							</tr>
						</table>
					</figcaption>
				</figure>
				<div class="photo-description">
					<div class="col-lg-9">
						<span class="business-name">{{$b->name}}</span>
						<span class="business-type">{{$b->type}}</span>
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
@endsection
