@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">    
        
        <!--When add organization from submit then any error occur this div display   -->
        @if ($errors->any())
           <div class="panel panel-default">
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
           </div>
       @endif
  </div>
@endsection