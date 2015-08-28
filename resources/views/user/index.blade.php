@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Profile</div>
				<div class="panel-body">
					Hello {{Auth::user()->name}}
					<div class="form-group">
						<div class="col-md-4 control-label">Name</div>
						<div class="col-md-6">
							{{ Auth::user()->name }}
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-4 control-label">E-Mail</div>
						<div class="col-md-6">
							{{ Auth::user()->email }}
						</div>
					</div>
					
					<div class="form-group">
	                    <div class="col-md-4 control-label">User Role</div>
	                    <div class="col-md-6">
	                        @if (isset($userRole) && !empty($userRole))
	                            @foreach ($userRole as $role)
	                                @if(Auth::user()->role_id == $role->role_id) 
	                                	{{$role -> role_name}}
	                                @endif
	                            @endforeach
	                        @endif
	                    </div>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
