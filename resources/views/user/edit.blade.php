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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/user/'.Auth::user()->id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
							</div>
						</div>
						
						<div class="form-group">
                            <label class="col-md-4 control-label">User Role</label>
                            <div class="col-md-6">
                            	<select class="form-control" name = "role_id">
	                                @if (isset($userRole) && !empty($userRole))
	                                    @foreach ($userRole as $role)
	                                        <option @if(Auth::user()->role_id == $role->role_id) selected @endif value = "{{$role -> role_id}}">{{$role -> role_name}}</option>
	                                    @endforeach
	                                @endif
	                            </select>
                            </div>
                        </div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
