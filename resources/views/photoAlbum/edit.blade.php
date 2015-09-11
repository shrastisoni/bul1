@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User Account</div>
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
					{!! Form::model($user, [
					    'method' => 'PATCH',
					    'route' => ['user.update', $user->id]
					]) !!}
					{!! Form::token() !!}
					<div class="form-group">
					    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
					    {!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>
					
					<div class="form-group">
					    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
					    {!! Form::email('email', null, ['class' => 'form-control']) !!}
					</div>
					
					<div class="form-group">
                        <label class="control-label">User Role</label>
                    	<select class="form-control" name = "role_id">
                                @foreach ($roles as $role)
                                    <option @if(Auth::user()->role_id == $role->role_id) selected @endif value = "{{$role -> role_id}}">{{$role -> role_name}}</option>
                                @endforeach
                        </select>
                    </div>	
                    				
					{!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
