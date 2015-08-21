@extends('app')

@section('content')
<div class="container-fluid">
	    <!-- Add SideBar Menu -->
        @include('layout.sidebarMenu')

		<div class="col-md-8 col-sm-8 col-lg-8">
			<div class="portlet box red">
				<div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i> Add User
                    </div>
                </div>
				<div class="panel-body portlet-body form">
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-body">
							<label>First Name</label>
					        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
						</div>
                        
                        <div class="form-body">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                        </div>
                        
						<div class="form-body">
							<label>E-Mail Address</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-body">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>

						<div class="form-body">
							<label>Confirm Password</label>
						    <input type="password" class="form-control" name="password_confirmation">
						</div>
						
                        <div class="form-body">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="phone_number" value = "{{ old('phone_number') }}">
                        </div>
                        
                        <div class="form-body">
                            <label>User Role</label>
                            <select class="form-control" name = "role_id">
                                @if (isset($userRole) && !empty($userRole))
               
                                    @foreach ($userRole as $role)
                                        <option value = "{{$role -> role_id}}">{{$role -> role_name}}</option>
                                    @endforeach
                               
                                @endif
                            </select>
                        </div>
                        
						<div class="form-actions right">
							<button type="submit" class="btn green">
								Register
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
