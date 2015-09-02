@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				        {{ Session::get('flash_message') }}
				    </div>
				@endif
				<div class="panel-heading">Edit Question</div>
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

					{!! Form::open([
					    'route' => 'questions.store'
					]) !!}
					{!! Form::token() !!}
					<div class="form-group">
					    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
					    {!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>
					
					<div class="form-group">
					    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
					    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
					</div>
					
					{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}
					
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
