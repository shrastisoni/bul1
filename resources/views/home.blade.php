@extends('app')

@section('content')
<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<a href="{{route('businesses.index')}}">Businesses</a>
			</li>
			<li>
				<a href="#">Photos</a>
			</li>
			<li>
				<a href="{{route('users.index')}}">Users</a>
			</li>
			<li>
				<a href="{{route('questions.index')}}">Queries</a>
			</li>
			<li>
				<a href="#">Our Feed</a>
			</li>
		</ul>
	</div>
</div>

@endsection
