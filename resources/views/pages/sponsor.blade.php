@extends('welcome')
@section('content')
    <div class="container my-5">
        <div>
            <h1 class="text-center">ПАРТНЁРЫ И СПОНСОРЫ</h1>
        </div>
        <div class="d-flex my-5">
            <div>
                <img src="{{asset('img/fc68d1969d41366cff9bcc8f08dd10f4.png')}}" alt="" class="me-3 img">
            </div>
            <div>
                <img src="{{asset('img/b880b27e158ae5ea4067287274de5407.png')}}" alt="" class="me-3 img mt-3">
            </div>
            <div>
                <img src="{{asset('img/fc25ed188982f22ae7df756e8b270a75.png')}}" alt="" class="me-3 img mt-3">
            </div>
            <div>
                <img src="{{asset('img/muvistart.png')}}" alt="" class="me-3 img mt-3">
            </div>
        </div>
    </div>
@endsection
