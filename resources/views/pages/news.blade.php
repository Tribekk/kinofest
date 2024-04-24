@extends('welcome')
@section('content')
    <div class="container">
        <h1 class="m-5">Новости</h1>
        @foreach($news as $new)
            <div class="row mt-5">
                <div class="col-lg-3">
                    <img src="{{asset('storage/'. $new->img)}}" alt="" class="img">
                </div>
                <div class="col-lg-8 mt-3">
                    <p class="mt-5">{{$new->created_at->format('d.m.Y')}}</p>
                    <h3 class="mt-5">{{$new->name}}</h3>
                    <a href="news/{{$new->id}}" class="nav-link mt-5">{{$new->preview}}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
