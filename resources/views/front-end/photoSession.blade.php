@extends('front-end.base')
@section('meta')
    <title>Незабываемая {{$gallery['title']}} от TearDary</title>
    <meta name="description" content="Профессиональные фотографии и качественная пост обработка в Челябинске ">
    <meta name="keyword" content="Фотографии, фотограф, фотосессии, Челябинск, Инстаграмм">
@endsection
@section('content')
    <section class="photo-session">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h2 class="photo-session_title">{{$gallery['title']}}</h2>
                <div class="col-lg-12">
                    {!! $gallery['text'] !!}
                </div>
            </div>
            <div class="row">
                <div class="photo-session_images">
                    @foreach($images as $image)
                        <img src="/storage/{{$image['sourse']}}" alt="{{$gallery ['title']}}" width="364" height="273">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection