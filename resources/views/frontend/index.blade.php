@extends('layout.frontend')
@section('content')
    <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($sports as $sport)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img style="object-fit:cover" class="card-img-top" src="/img/{{$sport->picture}}" width = "200px" height = "200px" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{$sport->name}}</h5>
                                    <p>{{$sport->datetime}}</p>
                                    <p>{{$sport->duration}} hrs</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endsection