$(document).ready(function(){
    var slider= $('.inner_slider').slick({
        accessibility:false,
        draggable:true
    });
    $('.next').on('click',function (e) {
        slider.slick('slickNext');
    });
    $('.prev').on('click',function (e) {
        slider.slick('slickPrev');
    });
    $('#mailSend').on('click',function (e) {
        e.preventDefault();
        $.ajax({
            url: '/contact',
            type: "POST",
            data: {
                name : $('#name').val(),
                phone: $('#phone').val()
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                alert(data);
            },
            error: function (msg) {
                alert('Ошибка');
            }
        });
    });

    /**//////


    //Слайдер портфолио
    var a=$('.photo-session_images img');
    var count=a.length;
    var current=0;

    $('.photo-session_images img').click(function(e){
        $("body").css("overflow-y","hidden");
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
        $("body").css("overflow-y","visible");
        $('.portfolio__slider').hide();
        $('.portfolio__slider__image img').remove();
    });
/*-------------- якорь*/
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });
});