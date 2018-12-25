<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Кошерные фоточки">

    <title>Качественные фотосесси от Дашанчика</title>

    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\fontello.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script            src="http://code.jquery.com/jquery-3.3.1.min.js"            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="            crossorigin="anonymous"></script>
    <script src="slick/slick.min.js"></script>

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
                    {!! Form::open(['action'=>'Mail@store', 'files'=>'true', 'class'=>'bottoms_block']) !!}
                    {!! Form::label('name','Ваше имя (Обязательно)') !!}
                    {!! Form::text('name') !!}
                    {!! Form::label('phone','Телефон (Обязательно)') !!}
                    {!! Form::text('phone') !!}
                    {!! Form::submit('Отправить заявку', ['class'=>'botton']) !!}
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
<script>
    $(document).ready(function(){
        var slider= $('.inner_slider').slick({
            accessibility:false,
            draggable:true
        });
        $('.next').on('click',function () {
            slider.slick('slickNext');
        });
        $('.prev').on('click',function () {
            slider.slick('slickPrev');
        })
        //Слайдер портфолио
        /* var a=$('.portfolio img');
         var count=a.length;
         var current=0;

         $('.portfolio img').click(function(e){
         $('.portfolio__slider').css('display', 'flex');
         $('<img>',{src: this.src}).appendTo('.portfolio__slider__image');
         var scroll= $('html').scrollTop();
         $('.portfolio__slider').css('top', scroll)
         for(var i=0; i<count; i++){
         if(this.src==a[i].src){
         current=i;
         }
         }
         });

         $('.portfolio__slider__next').click(function(){
         current++;
         if(current>=count){
         current=0;
         }

         $('.portfolio__slider__image img').attr({src: a[current].src});
         });
         //prev
         $('.portfolio__slider__prev').click(function(){
         current--;
         if(current<0){
         current=count-1;
         }
         $('.portfolio__slider__image img').attr({src: a[current].src});
         });
         $('.portfolio__slider__image').click(function(){
         $('.portfolio__slider').hide();
         $('.portfolio__slider__image img').remove();
         });
         */
    });
</script>
</body>
</html>