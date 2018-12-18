<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\fontello.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script            src="http://code.jquery.com/jquery-3.3.1.min.js"            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="            crossorigin="anonymous"></script>
    <script src="slick/slick.min.js"></script>

</head>
<body>
@yield('content')
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