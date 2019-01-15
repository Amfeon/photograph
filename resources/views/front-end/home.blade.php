@extends('front-end.base')
@section('meta')
    <title>Качественные фотосессия от Дашанчика в Челябинске</title>
    <meta name="description" content="Профессиональные фотографии и качественная пост обработка в Челябинске ">
    <meta name="keyword" content="Фотографии, фотограф, фотосессии, Челябинск, Инстаграмм">
@endsection
@section('content')
<section class="slider">
    <div class="inner_slider">
        @foreach($data as $image)
            <div class="item active"><img src="storage/{{$image}}" alt="Фотосессия у Дашанчика"> </div>
        @endforeach
    </div>
    <div class="prev">
        <span class="left" role="button" data-slide="prev">  </span>
    </div>
    <div class="next">
        <span class="right" role="button" data-slide="next">  </span>
    </div>
    <div class="photo-circle">
        <i class="demo-icon icon-camera"></i>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="contact__title">{{$options->title}}</h2>
                <div class="contact__desc">{!! $options->text !!}               </div>
                <a href="#contact" class="botton contact__botton">Заказать фотосессию</a>
            </div>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container-fluid">
        <h2 class="portfolio__title ">Мои работы</h2>
        <div class="row flex-wrap justify-content-around" >
            @foreach($galleries as $gallery)
            <div class="portfolio__item">
                <a href="photo-session/{{$gallery['id']}}" title="{{$gallery['title']}}" ><img class="portfolio__image" src="storage\{{$gallery->thumnail}}">
                <h4>{{$gallery->title}}</h4>
                </a>
            </div>
                @endforeach
        </div>
    </div>
</section>
@endsection