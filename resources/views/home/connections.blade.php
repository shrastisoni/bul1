@extends('home.header')

@section('content')

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

</div>
@endsection