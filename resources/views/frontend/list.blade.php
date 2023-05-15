@extends('layout.frontend')
@section('content')
<div class="container">
    <br>
    <div class="row">
        @foreach($sports as $sport)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <a href="{{url('/frontend/sport/show/'.$sport->id)}}">
                    <img style="object-fit:cover"src="/img/{{$sport->picture}}" width="200px" height="200px" alt="">
                </a>
                <div class="caption">
                    <h4>{{$sport->name}}</h4>
                    <p>{{$sport->datetime}}</p>
                    <p>{{$sport->duration}} hrs</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Pagination -->
    {{$sports->links('pagination::bootstrap-5');}}
</div>
@endsection