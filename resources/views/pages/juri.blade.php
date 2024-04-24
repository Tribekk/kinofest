@extends('welcome')
@section('content')
<div class="container">
    <h1 class="text-center">Жюри кинофестиваля</h1>
    <div class="row">
        @foreach($juri as $item)
            <div class="col-lg-4">
                <img src="{{asset('storage/'. $item->img)}}" alt="" class="img">
                <div class="accordion accordion-flush" id="accordionFlushExample{{$item->id}}">
                    <div class="accordion-item">
                        <h2 class="accordion-header w-75">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$item->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{$item->FIO}}
                            </button>
                        </h2>
                        <div id="flush-collapseOne{{$item->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample{{$item->id}}">
                            <div class="accordion-body w-75">
                            {!! $item->films !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
