@extends('front-end.base')
@section('content')
<section class="slider">
    <div class="inner_slider">
        @foreach($data as $image)
            <div class="item active"><img src="storage\{{$image}}" alt="Фотосессия у Дашанчика"> </div>
        @endforeach
    </div>
    <div class="prev">
        <a class="left" href="#" role="button" data-slide="prev">  </a>
    </div>
    <div class="next">
        <a class="right" href="#" role="button" data-slide="next">  </a>
    </div>
    <div class="photo-circle">
        <i class="demo-icon icon-camera"></i>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="contact__title">Забацай себе фотосессию</h2>
                <div class="contact__desc"><p>Доброго дня, дорогой гость Дашанчика!</p><p>
                        Коль уж тебя сюда занесло, стало быть, есть интерес к участию в фотосессии, не так ли? Что-ж, мой дорогой друг, ты по адресу!
                        Я далеко не профессионал, но я стараюсь активно развиваться в этой сфере. Поэтому ты (да-да, милый человечек по ту сторону экрана, речь именно о тебе) мне в этом поможешь.
                        Я получаю опыт и монетки, а ты получаешь позитивные эмоции и красивые фотографии, хорошая сделка, не правда-ли? Думаю весьма!</p> </div>
                <div class="botton contact__botton">Заказать фотосессию</div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container-fluid">
        <h2 class="portfolio__title ">Мои работы</h2>
        <div class="row flex-wrap justify-content-between" >
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/1.jpg"></div>
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/11.jpg"></div>
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/12.jpg"></div>
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/9.jpg"></div>
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/5.jpg"></div>
            <div class="portfolio__item"><img class="portfolio__image" src="image/slider/8.jpg"></div>
        </div>
    </div>
</section>
@endsection