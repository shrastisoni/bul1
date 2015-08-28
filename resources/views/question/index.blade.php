@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">All Questions</div>
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
					@foreach($questions as $question)
					    <h3>{{ $question->title }}</h3>
					    <p>{{ $question->description}}</p>
					    <p>
					        <a href="{{ route('question.show', $question->id) }}" class="btn btn-info">View Task</a>
					        <a href="{{ route('question.edit', $question->id) }}" class="btn btn-primary">Edit Task</a>
					    </p>
					    <hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
