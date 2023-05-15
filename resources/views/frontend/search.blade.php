@extends('layout.frontend')
@section('content')
<div class="container">
    <br>
    <div class="row">
        {{ Form::open(array('url'=>'frontend/sport/search','method'=>'get')) }}
        <div class="input-group">
            {{ Form::text('keyword',$keyword ?? '', array('placeholder'=>'Search', 'class'=>'form-control')) }}
            <span class="input-group-btn">
                {{ Form::submit('search',array('class'=>'btn btn-primary')) }}
            </span>
        </div>
        {{ Form::close() }}
        <br><br>
        @foreach($sports as $sport)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <a href="{{url('/frontend/event/show/'.$sport->id)}}">
                    <img style="object-fit: cover;"src="/img/{{$sport->picture}}" width="200px" height="200px" alt="">
                </a>
                
                <div class="caption">
                    <h4>{{ $sport->name}}</h4>
                    <p>{{ $sport->datetime}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination -->
    {{ $sports->withQueryString()->links('pagination::bootstrap-5');}}
</div>
@endsection