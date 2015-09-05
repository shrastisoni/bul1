@extends('app')

@section('content')
<div class="collapse navbar-collapse main-nav" id="main-navbar-collapse">
	<div class="container">
		<ul class="nav navbar-nav">
			<li>
				<a href="/businesses">Businesses</a>
			</li>
			<li>
				<a href="/photos">Photos</a>
			</li>
			<li>
				<a href="{{route('user.index')}}">Users</a>
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
