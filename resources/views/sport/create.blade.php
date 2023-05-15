@extends('layout.backend')
@section('content')
    <div class="panel-heading mb-2">
<h1>Create Sport</h1>
@if(Session::has('sport_create'))
<div class="alert alert-primary alert-dismissible">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Primary!</strong> {!! session('sport_create') !!}
</div>
@endif
@if (count($errors) > 0)
<!-- Form Error List -->
<div class="alert alert-danger">
<strong>Something is Wrong</strong>
<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{!! $error !!}</li>
@endforeach
</ul>
</div>
@endif
{!! Form::open(array('url'=> '/sport/post', 'files'=>'true')) !!}
{!! Form::label('name', 'Name: ') !!}
{!! Form::text('name', null ,array('class'=>'form-control')) !!}
<br>
{!! Form::label('description', 'Description: ') !!}
{!! Form::textarea('description', null ,array('class'=>'form-control')) !!}

{!! Form::label('datetime', 'Date and Time:') !!}
{!! Form::input('datetime-local', 'datetime', null, array('class' => 'form-control')) !!}

{!! Form::label('picture', 'Picture: ') !!}
{!! Form::file('picture', array('class'=>'form-control')) !!}

{!! Form::label('duration', 'Duration:') !!}
{!! Form::input('number', 'duration', null, array('class' => 'form-control')) !!}

<br>
{!! Form::submit('Create',array('class'=> 'btn btn-primary')) !!}
<a class="btn btn-secondary" href="{{route('sport.index')}}">Back</a>
</div>
{!! Form::close() !!}
@endsection