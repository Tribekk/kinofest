@extends('welcome')
@section('content')
    <div class="container">
        <h1>{{$news[0]->name}}</h1>
        <div class="row mt-5">
            <div class="col-lg-4">
                <img src="/storage/{{$news[0]->img}}" alt="">
            </div>
            <div class="col-lg-7    ">
                {!! $news[0]->description !!}
            </div>
        </div>
    </div>
@endsection
