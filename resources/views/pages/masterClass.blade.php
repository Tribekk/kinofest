@extends('welcome')
@section('content')
    <div class="container my-3">
        <h3 class="text-center">Пропустили семинар - смотрите бесплатно в киноклубе</h3>
        <h3 class="text-center">Вопросы задайте в телеграмме</h3>
        <h1 class="text-center">Мастер-классы</h1>
        <div class="row mt-5">
            <div class="col-lg-3">
                <img src="{{asset('img/coming_soon.jpg')}}" alt="" class="rounded-5 img">
                <h4 class="mt-3 text-center">Кино-среда, 15 мая.
                    Программа уточняется</h4>
            </div>
            <div class="col-lg-3">
                <img src="{{asset('img/arakelyan.jpg')}}" alt="" class="rounded-5 img">
                <h4 class="mt-3 text-center">Кино-среда, 24 апреля.
                    Вебинар Тиграна Аракеляна "Мультипликация"</h4>
            </div>
            <div class="col-lg-3">
                <img src="{{asset('img/vorozhishev.jpg')}}" alt="" class="rounded-5 img">
                <h4 class="mt-3 text-center">Кино-среда, 17 апреля.
                    Лекция Никиты Ворожищева - сценариста сериала "Кибердеревня"
                    «Путь от короткого метра к сериалу»</h4>
            </div>
            <div class="col-lg-3">
                <img src="{{asset('img/atamanenko.jpg')}}" alt="" class="rounded-5 img">
                <h4 class="mt-3 text-center">Кино-среда, 10 апреля.
                    Лекция «Из всех искусств…»: политические сообщения, пропаганда и подтексты в кинематографе. </h4>
            </div>
        </div>
    </div>
@endsection
