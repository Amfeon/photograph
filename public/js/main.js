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