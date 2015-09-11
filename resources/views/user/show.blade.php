@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">All Users</div>
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
					<h1>{{ $user->name }}</h1>
					<p class="lead">{{ $user->email }}</p>
					<p class="lead">{{ $user->role_id }}</p>
					<hr>
					<a href="{{ route('users.index') }}" class="btn btn-info">Back to all User</a>
					<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
					
					<div class="pull-right">
						<div class="col-md-6 text-right">
					        {!! Form::open([
					            'method' => 'DELETE',
					            'route' => ['users.destroy', $user->id]
					        ]) !!}
					            {!! Form::submit('Delete this User?', ['class' => 'btn btn-danger']) !!}
					        {!! Form::close() !!}
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
