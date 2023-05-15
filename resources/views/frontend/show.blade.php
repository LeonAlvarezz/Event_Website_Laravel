@extends('layout.frontend')
@section('content')

    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="/img/{{$sports->picture}}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: {{$sports->id}}</div>
                <h1 class="display-5 fw-bolder">{{$sports->title}}</h1>
                <div class="fs-5 mb-5">
                    <span>{{$sports->datetime}}</span>
                </div>
                <p class="lead">
                    {{$sports->description}}
                </p>
                
                <p class="lead">
                    {{$sports->duration}} hrs
                </p>
                
            </div>
        </div>
    </div>

@endsection