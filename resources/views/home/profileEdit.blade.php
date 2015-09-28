<!doctype html>
<html ng-app="profileUpdate" ng-init="profilePic.url = '{{$business->profilePicPath}}'; coverPic.url = '{{$business->coverPicPath}}'">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Horsify | Profile - Edit</title>

<link rel="shortcut icon" type="image/png" href="/images/favicon.png"/>

<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" href="/images/apple-touch-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-iphone4.png" />
<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-ipad-retina.png" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/css/bootstrap.css">

<!-- Custom CSS -->
<link href="/css/style.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body id="profile-edit" ng-controller="profileUpdateController">

<!-- Navigation -->
<nav class="navbar top" role="navigation">
  <div class="top-container first">
    <div class="navbar-header">
      <button type="button" class="btn btn-default top-bar-categories blue">Browse Categories</button>
    </div>
    <div class="logo"> <a href="/"><img src="/images/horsify-logo.png"></a> </div>
    <div class="account">
      <ul class="nav navbar-nav navbar-right top-nav-first">
        <li> <a href="/search"><i class="fa fa-search"></i></a> </li>
        @if(Auth::check())
		<li>
			<a href="/auth/logout">Logout</a>
		</li>
		@else
		<li>
			<a href="/auth/login">Log in</a>
		</li>
		<li>
			<a href="/auth/register">Join now</a>
		</li>
		@endif
      </ul>
    </div>
  </div>
  <div class="top-container second"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav navbar-right">
         <?php 
			$UrlPath = '/'; 
			$sections = explode("/", Route::getCurrentRoute() -> getPath()); 
		?>
		<a href="/">Home</a>
		@foreach($sections as $section)
			<?php
				if ($UrlPath != '#') 
				{
					$UrlPath = $UrlPath . $section . '/';
				}
				?>
		<a href="{{$UrlPath}}" class="active">{{ucfirst($section)}}</a>
		@endforeach	
        </ul>
      </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling --> 
    
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>
<input style="display:none;" id="coverPic" type="file" accept="image/*" image="coverPic"/>
<header style="background-image: url(/images/bg-shadow.png), url(<%coverPic.url%>);">
  <div class="container">
  	<div class="update-cover-photo"><a href="#" ng-click="chooseImage('coverPic')"><img src="images/icons/camera.png"> <span>Update Banner Photo</span></a></div>
    <div class="col-lg-3"><a href="#" ng-click="chooseImage('profilePic')" class="update-profile-photo"><img src="images/icons/camera.png" class="icon"><span>Update Photo/Logo</span></a>
    <input style="display:none;" id="profilePic" type="file" accept="image/*" image="profilePic"/>
    <img ng-show="profilePic" height="180px" width="220px" ng-src="<%profilePic.url%>" class="upload-logo"></div>
    <div class="col-lg-9">
      <h2 class="company-title"><%edit.name.value%></h2>
      <h4 class="company-type">@if($business->businessId) Business Type: {{$business->type}} @else {{$business->type}} @endif</h4>
      <button type="button" class="btn btn-default green"><img src="images/icons/chat.png" class="icon">Contact us</button><button type="button" class="btn btn-default blue"><img src="images/icons/double-right-arrow.png" class="icon">Follow</button>
    </div>
  </div>
</header>
@include('home.profileMenu')

<div class="container">

	<!-- Content Row -->
	<div class="row">
		<!-- Sidebar Column -->
		<div class="col-md-3 sidebar">
			<div class="page-meta">
			@if($business->businessId)
				<span ng-init="edit.name.value='{{$business->name}}';edit.name.disabled='true';edit.name.classStyle = 'profileEditDisableInput'">Contact:</span> <input ng-class="edit.name.classStyle" ng-disabled="edit.name.disabled" type="text" ng-model="edit.name.value"/> <a ng-click="makeEditableFunc(edit.name)"><img src="/images/icons/edit-2.png" class="edit-profile"></a>
				<br>
				<span ng-init="edit.location.value='{{$business->location}}';edit.location.disabled='true';edit.location.classStyle = 'profileEditDisableInput'">Location:</span> <input ng-class="edit.location.classStyle" ng-disabled="edit.location.disabled" type="text" ng-model="edit.location.value"/> <a ng-click="makeEditableFunc(edit.location)"><img src="/images/icons/edit-2.png" class="edit-profile"></a>
				<br>
				<span ng-init="edit.serviceCoverage.value='{{$business->serviceCoverage}}';edit.serviceCoverage.disabled='true';edit.serviceCoverage.classStyle = 'profileEditDisableInput'">Servicing:</span> <input ng-class="edit.serviceCoverage.classStyle" ng-disabled="edit.serviceCoverage.disabled" type="text" ng-model="edit.serviceCoverage.value"/> <a ng-click="makeEditableFunc(edit.serviceCoverage)"><img src="/images/icons/edit-2.png" class="edit-profile"></a>
				<br>
				<span ng-init="edit.phone.value='{{$business->phone}}';edit.phone.disabled='true';edit.phone.classStyle = 'profileEditDisableInput'">Phone:</span> <input ng-class="edit.phone.classStyle" ng-disabled="edit.phone.disabled" type="text" ng-model="edit.phone.value"/> <a ng-click="makeEditableFunc(edit.phone)"><img src="/images/icons/edit-2.png" class="edit-profile"></a>
				<br>
				<span ng-init="edit.website.value='{{$business->website}}';edit.website.disabled='true';edit.website.classStyle = 'profileEditDisableInput'">Web:</span><input ng-class="edit.website.classStyle" ng-disabled="edit.website.disabled" type="text" ng-model="edit.website.value"/> <a ng-click="makeEditableFunc(edit.website)"><img src="images/icons/edit-2.png" class="edit-profile"></a>
				<span></span><img src="images/icons/facebook.png" class="social-icon"><img src="/images/icons/twitter.png" class="social-icon"><img src="images/icons/google-plus.png" class="social-icon"><a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a>
				<div class="clearfix spacer2x"></div>
				<span class="bookmark"><img src="/images/icons/double-right-arrow-color.png" class="icon">2,122 Followers</span>
				<div class="reviews">
					<img src="/images/icons/review.png" class="stars"><span class="rating">4.5</span> 12 Reviews
				</div>
			@else
				<span ng-init="edit.name.value='{{$business->name}}';edit.name.disabled='true';edit.name.classStyle = 'profileEditDisableInput'">Username:</span> <input ng-class="edit.name.classStyle" ng-disabled="edit.name.disabled" type="text" ng-model="edit.name.value"/> <a ng-click="makeEditableFunc(edit.name)"><img src="/images/icons/edit-2.png" class="edit-profile"></a></span>
				<br>
				<span ng-init="edit.location.value='{{$business->location}}';edit.location.disabled='true';edit.location.classStyle = 'profileEditDisableInput'">Location:</span> <span><input ng-class="edit.location.classStyle" ng-disabled="edit.location.disabled" type="text" ng-model="edit.location.value"/> <a ng-click="makeEditableFunc(edit.location)"><img src="/images/icons/edit-2.png" class="edit-profile"></a></span>
				<br>
				<span></span><img src="/images/icons/facebook.png" class="social-icon"><img src="/images/icons/twitter.png" class="social-icon"><img src="/images/icons/google-plus.png" class="social-icon"><a href="#"><img src="images/icons/edit-2.png" class="edit-profile"></a>
				<div class="clearfix spacer2x"></div>
				<span class="bookmark"><img src="/images/icons/social-circle-blue.png" class="icon">2,122 Connections</span>
				<br>
				<span class="bookmark"><img src="/images/icons/double-right-arrow-color.png" class="icon">2,122 Following</span>
			@endif
				<div class="edit-page">
					<button type="button" ng-click="updateProfileData()" class="btn btn-default edit-this-page green"><img src="/images/icons/save.png" class="icon">Save Changes When Done
					</button>
				</div>
			</div>
		</div>
		<!-- Content Column -->
		<div class="col-md-9 content">
			<h2 class="content-heading"><img src="/images/icons/file-2.png" class="icon about-us">About Us <a ng-click="makeEditableFunc(edit.about)"><img src="images/icons/edit-2.png" class="edit-profile"></a></h2>
			<p ng-init='edit.about.value="{{$business->about}}";edit.about.disabled="true";edit.about.classStyle = "profileEditDisableInput"'>
				<textarea ng-class="edit.about.classStyle" style="margin: 0px 15px; width: 885px; height: 165px;" ng-disabled="edit.about.disabled" ng-model="edit.about.value"></textarea>
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
<div class="container">
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
		<script src="/js/angular.min.js" type="text/javascript"></script>
	    <script type="text/javascript">
	          angular.module('profileUpdate', ['imageupload'], function($interpolateProvider, $compileProvider) {
	               $interpolateProvider.startSymbol('<%');
	               $interpolateProvider.endSymbol('%>');
	           })
	            .controller('profileUpdateController', function($scope, $http) {

	            	$scope.makeEditableFunc = function(inputId) {
	            		inputId.disabled = !(inputId.disabled);
				        if (inputId.disabled)
				            inputId.classStyle = "profileEditDisableInput";
				        else
				            inputId.classStyle = "profileEditEnableInput";
	            	};

	            	$scope.chooseImage = function(imageId) {
	            		$('#'+imageId).click();
					};
	                $scope.single = function() {
	                	var profilePic = $scope.profilePic;
	                	var coverPic = $scope.coverPic;
	                    var formData = new FormData();
	                    formData.append('profilePic', profilePic, profilePic.name);
	                    formData.append('coverPic', coverPic, coverPic.name);
	                    var data = {
							profilePic: $scope.profilePic,
							coverPic: $scope.coverPic
						};
	                    $http({
						    url: "/profileDataSave", 
						    method: "POST",
						    params: data
						 })
						.success(function(response) {
							console.log(response);
						});
	                };
	                $scope.updateProfileData = function(){
	                	
	                	@if($business->businessId)

	                	$scope.edit.name.disabled = true;
	                	$scope.edit.location.disabled = true;
	                	$scope.edit.about.disabled = true;
	                	$scope.edit.serviceCoverage.disabled = true;
	                	$scope.edit.phone.disabled = true;
	                	$scope.edit.website.disabled = true;

	                	var data = {
	                		name : $scope.edit.name.value,
	                		location : $scope.edit.location.value,
	                		about : $scope.edit.about.value,
	                		serviceCoverage : $scope.edit.serviceCoverage.value,
	                		phone : $scope.edit.phone.value,
	                		website : $scope.edit.website.value
	                	};

	                	@else

	                	$scope.edit.name.disabled = true;
	                	$scope.edit.location.disabled = true;
	                	$scope.edit.about.disabled = true;
	                	var data = {
	                		name : $scope.edit.name.value,
	                		location : $scope.edit.location.value,
	                		about : $scope.edit.about.value
	                	};

	                	@endif

				        $http({
						    url: "/profileDataSave", 
						    method: "GET",
						    params: data
						 })
						.success(function(response) {
							
						});
				    };
	            });
	    </script>
	    <script src="/js/imageupload.js" type="text/javascript"></script>
		
		<script src="/js/bootstrap.min.js"></script>
		
	</body>
</html>
