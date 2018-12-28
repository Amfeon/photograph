<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Кошерные фоточки">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Качественные фотосесси от Дашанчика</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>



</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="header__logo"><a href="/">Загляни к <span class="red">Дашанчику</span></a></div>
            </div>
            <div class="col-8 d-flex justify-content-end">
                <nav class="header__menu">

                    <!--  <ul class="d-flex ">
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Projects</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Social</a></li>
                       </ul> -->
                </nav>
            </div>
        </div>
    </div>
</header>

@yield('content')
<footer class="footer">
    <div class="container">
        <h3>Контакты</h3>
        <div class="row flex-wrap">
            <div class="col-lg-6">
                <div class="form">
                    {!! Form::open(['route'=>'contact', 'files'=>'true', 'class'=>'bottoms_block']) !!}
                    {!! Form::label('name','Ваше имя (Обязательно)') !!}
                    {!! Form::text('name') !!}
                    {!! Form::label('phone','Телефон (Обязательно)') !!}
                    {!! Form::text('phone') !!}
                    {!! Form::submit('Отправить заявку', ['class'=>'botton', 'id'=>'mailSend']) !!}
                    {!! Form::close() !!}
                </div></div>
            <div class="col-lg-6">
                <div class="social">
                    <ul>
                        <li class="social__item"><a href="#"> <i class="demo-icon icon-vkontakte"></i></a></li>
                        <li class="social__item"><a href="#"> <i class="demo-icon icon-youtube"></i></a></li>
                        <li class="social__item"><a href="#"> <i class="demo-icon icon-instagram"></i></a></li>
                    </ul>
                    <div class="copyright">© Все все права защищены </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="portfolio__slider">
    <div class="portfolio__slider__image"></div>
    <div class="portfolio__slider__next"><img src="/css/img/right.png"></div>
    <div class="portfolio__slider__prev"><img src="/css/img/left.png"></div>
</div>
<script rel="script" src="{!! asset('js/app.js')!!} "></script>
<script src="/slick/slick.min.js"></script>
</body>
</html>