@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">All Users <a href="{{ route('users.create') }}" class="btn btn-info">Create User</a></div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@foreach($users as $user)
					    <h3>{{ $user->name }}</h3>
					    <p>{{ $user->email}}</p>
					    <p>
					        <a href="user/{{$user->uName}}/profile" class="btn btn-info">View User</a>
					        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
					    </p>
					    <hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
