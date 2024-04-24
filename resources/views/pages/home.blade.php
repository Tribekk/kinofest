@extends('welcome')
@section('content')
    <div class="cosmos">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-5 mt-auto mb-auto">
                    <h1 class="text-danger">2-6 Августа 2024 </h1>
                    <h1 class="text-light">Международный кинофестиваль короткометражных фильмов
                        <text class="text-danger">Мечта</text>
                    </h1>
                </div>
                <div class="col-lg-6 mt-3">
                    <div class="row">
                        <div class="col-lg-9 bg-danger bg-gradient bg-opacity-10 py-3 text-light rounded-5">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <h5>Кино-среды. Еженедельные лекции и мастер-классы</h5>
                                </div>
                                <div class="col-lg-6">
                                    <p>Бесплатные оффлайн- мероприятия с участием известных спикеров</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 bg-danger bg-gradient bg-opacity-10 p-3 text-light rounded-5 mt-4">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h5>Регистрация на питчинг сценариев п/м и сериалов</h5>
                            </div>
                            <div class="col-lg-6">
                                <p>Регистрация откроется в июне.
                                    Шорт-лист финалистов будет опубликован 31.07</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 bg-danger bg-gradient bg-opacity-10 p-3 text-light rounded-5 mt-4 mb-5">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <h5>Регистрация фестивальных работ</h5>
                            </div>
                            <div class="col-lg-8">
                                <p>Регистрация откроется в апреле.
                                    Шорт-лист финалистов будет опубликован 25.07</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-secondary bg-gradient">
        <div class="container">
            <h1>Обращение президента фестиваля "Мечта" - Геннадия Иванова</h1>
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{asset('img/5f616e3cb15006a8385957ceae332839.jpg')}}" alt="" class="rounded-5 mt-5">
                </div>
                <div class="col-lg-8">
                    <p>Режиссёр, продюсер.</p>
                    <p>Директор киношколы Алексадра Митты.</p>
                    <p class="mt-3">Уважаемые зрители и участники кинофестиваля Мечта!</p>
                    <p class="mt-3">Хочу выразить огромную благодарность всем, кто принял участие в этом грандиозном
                        событии. Фестиваль Мечта, в котором мы представили 7 захватывающих работ выпускников киношколы
                        Александра Митты, оказался не только экспериментальным, но и прекрасной площадкой для
                        творческого самовыражения. Фильмы представлены в разных жанрах, с интересными Героями и
                        социально значимы.</p>
                    <p class="mt-3">Наши финалисты продемонстрировали чарующую смесь искусства и эмоций, вызывая самые
                        разные реакции у нашего большого жюри профессионалов киноиндустрии. Именно такое разнообразие
                        мнений и переживаний делает кино таким привлекательным и интересным искусством.</p>
                    <p class="mt-3">Мы были свидетелями яростных споров и голосования жюри, которые проходили в кулуарах
                        Дома кино, так как каждый фильм заслуживал особого внимания и признания. Однако в конечном
                        итоге, с гордостью объявляю, что победителем фестиваля Мечта стал фильм под названием
                        "Дурачок".</p>
                    <p class="mt-3">"Дурачок" - это произведение искусства, которое не только трогает сердце, но и
                        заставляет задуматься о тонкостях человеческой природы. История, созданная талантливыми авторами
                        этого фильма, поражает своей глубиной и проникновением в душу зрителя.</p>
                    <p class="mt-3">Кроме того, в рамках фестиваля на киностудии АМЕДИА проходил питчинг полнометражных
                        фильмов и сериалов, который был просто невероятным! Молодые и перспективные режиссеры и
                        сценаристы представили свои идеи, наполненные страстью и талантом. Их презентации были настолько
                        убедительными, что жюри долго и тщательно обсуждало каждый проект. Я уверен, что в ближайшем
                        будущем мир увидит множество потрясающих фильмов и сериалов от этих талантливых людей.</p>
                    <p class="mt-3">Хочу пожелать всем участникам, как тем, кто победил, так и тем, кто еще только
                        начинает свой путь в киноиндустрии, чтобы они сохраняли свою неповторимость и творческую
                        смелость. Именно эти качества делают искусство кино таким уникальным и захватывающим миром.</p>
                    <p class="mt-3">Желаю всем больших успехов и непрерывного развития в мире кино! И сразу хочу
                        пригласить вас на следующий фестиваль, который состоится 2-6 августа 2024 года. Пусть Мечта о
                        новых проектах и продолжении творческого пути каждого из нас станет реальностью!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="man">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ms-5 text-light mt-5">
                    <h1>Дорогие друзья !</h1>
                    <h5 class="mt-5">Мы хотим собраться на фестивале «Мечта», чтобы посмотреть свои фильмы.</h5>
                    <h5 class="mt-5">Пусть сегодня это наши первые короткометражки, но я уверен, что уже завтра мы будем определять векторы развития кинематографа.</h5>
                    <h5 class="mt-5">Фильмы и сериалы помогают нашим зрителям лучше понять мир, в котором мы живём.</h5>
                    <h5 class="mt-5">Фестиваль «Мечта» дарит нам возможность ощутить творческие радости нашего мира .</h5>
                    <h5 class="mt-5">Мы все разные, у всех нас разные эмоции, и чем больше эмоций будет в вокруг, тем ярче засверкает наша фантазия. Мы - одна большая семья, в которой разнообразия и счастья хватит на всех!</h5>
                    <h5 class="mt-5">Давайте представим на фестивале «Мечта» всё лучшее, что мы сделали!</h5>
                    <h4 class="text-end mt-5 mb-5">Ваш, Саша Митта.</h4>
                </div>
            </div>
        </div>
    </div>
@endsection