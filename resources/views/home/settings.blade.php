@extends('home.header')

@section('content')

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
				<span class="line-of-text"><span>Business Name:</span> {{$business->name}}</span>
				<span class="line-of-text"><span>Business Type:</span> {{$business->type}}</span>
				<span class="line-of-text"><span>Membership Level:</span> Basic <span class="upgrade-membership pull-right"><a href="#">Upgrade to Premium. Try it for Free. <img src="/images/icons/right-arrow-color.png"></a></span></span>
			</div>
			<div class="business-contact business-info-settings">
				<h3 class="content-sub-heading">Business Contact <span class="edit-settings pull-right"><a href="#">Edit</a></span></h3>
				<span class="line-of-text"><span>Main Contact:</span> {{$business->name}}</span>
				<span class="line-of-text"><span>Email Address:</span> <a href="mailto:{{$business->email}}">{{$business->email}}</a></span>
				<span class="line-of-text"><span class="address">Address:</span> <span>{{$business->location}}</span><br/>
				<span class="line-of-text"><span>Phone:</span>
					<tel>
						{{$business->phone}}
					</tel></span>
			</div>
			<div class="password business-info-settings">
				<h3 class="content-sub-heading">Password <span class="edit-settings pull-right"><a href="#">Edit</a></span></h3>
				<span class="line-of-text"><span>Password:</span> **********</span>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>

<script>
	$('#photo-1').on('click', function() {
		var $$ = $(this)
		if (!$$.is('.checked')) {
			$$.addClass('checked');
			$$.removeClass('unchecked');
		} else {
			$$.removeClass('checked');
			$$.addClass('unchecked');
		}
	})
	$('#photo-2').on('click', function() {
		var $$ = $(this)
		if (!$$.is('.checked')) {
			$$.addClass('checked');
			$$.removeClass('unchecked');
		} else {
			$$.removeClass('checked');
			$$.addClass('unchecked');
		}
	})
	$('#photo-3').on('click', function() {
		var $$ = $(this)
		if (!$$.is('.checked')) {
			$$.addClass('checked');
			$$.removeClass('unchecked');
		} else {
			$$.removeClass('checked');
			$$.addClass('unchecked');
		}
	})
	$('#photo-4').on('click', function() {
		var $$ = $(this)
		if (!$$.is('.checked')) {
			$$.addClass('checked');
			$$.removeClass('unchecked');
		} else {
			$$.removeClass('checked');
			$$.addClass('unchecked');
		}
	})

</script>
@endsection