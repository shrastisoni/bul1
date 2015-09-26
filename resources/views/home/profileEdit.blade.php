@extends('home.header')

@section('content')

<div class="container">

	<!-- Content Row -->
	<div class="row">
		<!-- Sidebar Column -->
		<div class="col-md-3 sidebar">
			<div class="page-meta">
				<span>Contact:</span> <span>{{$business->name}} <a href="#"><img src="/images/icons/edit-2.png" class="edit-profile"></a></span>
				<br>
				<span>Location:</span> <span>{{$business->location}} <a href="#"><img src="/images/icons/edit-2.png" class="edit-profile"></a></span>
				<br>
				<span>Servicing:</span> <span>{{$business->serviceCoverage}} <a href="#"><img src="/images/icons/edit-2.png" class="edit-profile"></a></span>
				<br>
				<span>Phone:</span> <span>{{$business->phone}} <a href="#"><img src="/images/icons/edit-2.png" class="edit-profile"></a><span>
				<br>
				<span>Web:</span><a href="{{$business->website}}" target="_blank">{{$business->website}}</a><a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a>
				<span></span><img src="images/icons/facebook.png" class="social-icon"><img src="/images/icons/twitter.png" class="social-icon"><img src="images/icons/google-plus.png" class="social-icon"><a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a>
				<div class="clearfix spacer2x"></div>
				<span class="bookmark"><img src="/images/icons/double-right-arrow-color.png" class="icon">2,122 Followers</span>
				<div class="reviews">
					<img src="/images/icons/review.png" class="stars"><span class="rating">4.5</span> 12 Reviews
				</div>
				<div class="edit-page">
					<button type="button" onclick="window.location = '/profile';" class="btn btn-default edit-this-page green"><img src="/images/icons/save.png" class="icon">Save Changes When Done
					</button>
				</div>
			</div>
		</div>
		<!-- Content Column -->
		<div class="col-md-9 content">
			<h2 class="content-heading"><img src="/images/icons/file-2.png" class="icon about-us">About Us <a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a></h2>
			<p>
				Maecenas nec tempor magna. Maecenas suscipit nisi ac est aliquet finibus. Quisque at dapibus odio. Ut consectetur vel mauris eget interdum. Ut ut dapibus elit, ut elementum erat. Maecenas efficitur dui sed nisi faucibus hendrerit. Suspendisse potenti. Nunc auctor ligula pellentesque, pretium mi non, lobortis ligula.
			</p>
			<p>
				Proin ex augue, pulvinar sagittis varius vel, finibus eu tortor. Integer porttitor eu eros id auctor.
			</p>
			<p>
				Aenean sit amet augue scelerisque dui semper aliquam vitae quis sem. In ut lorem iaculis, efficitur est scelerisque, mattis augue. Mauris maximus auctor lorem, sed consequat dolor vestibulum at. Duis finibus vulputate quam, a aliquet sapien ornare at. Curabitur auctor mollis nunc, eu suscipit ex tincidunt ac. Morbi ipsum dui, iaculis vitae fringilla suscipit, ultrices a dui. Aenean neque quam, suscipit sed tempor ut, egestas at quam. Duis id eros eu erat mattis sodales.
			</p>
			<h2 class="content-heading"><img src="/images/icons/services.png" class="icon services">Services <a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a></h2>
			<ul class="fa-ul">
				<li>
					<i class="fa-li fa fa-circle-thin blue"></i> Lessons
				</li>
				<li>
					<i class="fa-li fa fa-circle-thin blue"></i> Agistment
				</li>
				<li>
					<i class="fa-li fa fa-circle-thin blue"></i> Clipping
				</li>
				<li>
					<i class="fa-li fa fa-circle-thin blue"></i> Trading
				</li>
				<li>
					<i class="fa-li fa fa-circle-thin blue"></i> Selling
				</li>
			</ul>
			<h2 class="content-heading"><img src="/images/icons/album-2.png" class="icon photos">Photos</h2>
			<div class="photo-gallery">
				<div class="col-md-3 album"><img src="/images/photos-1.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-2.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-3.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-4.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-3.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-1.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-4.png">
				</div>
				<div class="col-md-3 album"><img src="/images/photos-2.png">
				</div>
			</div>
			<div class="clearfix spacer"></div>
			<h2 class="content-heading"><img src="/images/icons/social-circle.png" class="icon connections">Connections</h2>
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

			</div>
			<div class="clearfix spacer"></div>
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

			</div>

		</div>
	</div>
	<!-- /.row -->

</div>
@endsection