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
					<h1>{{ $question->title }}</h1>
					<p class="lead">{{ $question->description }}</p>
					<hr>
					<a href="{{ route('question.index') }}" class="btn btn-info">Back to all questions</a>
					<a href="{{ route('question.edit', $question->id) }}" class="btn btn-primary">Edit Question</a>
					
					<div class="pull-right">
						<div class="col-md-6 text-right">
					        {!! Form::open([
					            'method' => 'DELETE',
					            'route' => ['question.destroy', $question->id]
					        ]) !!}
					            {!! Form::submit('Delete this Question?', ['class' => 'btn btn-danger']) !!}
					        {!! Form::close() !!}
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
