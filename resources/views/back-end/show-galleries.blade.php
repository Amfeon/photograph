@extends('back-end.admin-base')
@section('content')
    <div class="row flex-column">
            <h3 class="alert alert-info">Создание новой галлереи </h3>
        {!! Form::open(['action'=>'GalleryController@create', 'files'=>'true', 'class'=>'bottoms_block']) !!}
        {!! Form::label('Название') !!}
        {!! Form::text('title') !!}
        {!! Form::label('Миниатюра ') !!}
        {!! Form::file('gallery',['class' => 'awesome', 'accept'=>'image/jpeg']) !!}
        {!! Form::label('Картинки фотосессии ') !!}
        {!! Form::file('image[]',['class' => 'awesome', 'accept'=>'image/jpeg', 'multiple'=>'true']) !!}
        {!! Form::submit('создать', ['class'=>'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
    <div class="row flex-wrap">
        <div class="card">
            @foreach($data as $item)
            <div class="card-body text-center"><!-- Начало текстового контента -->
                <h4 class="card-title">{{$item->title}}</h4>
                <img src="storage\{{$item->thumnail}}" class="card-img" >
                <div class="d-flex justify-content-between" style="margin: 20px 0">
                    <a class="btn btn-warning" href="#" class="card-link">Редактировать</a>
                    <a  class="btn btn-danger" href="/delete-gallery/{{$item->id}}" class="card-link">Удалить</a>
                </div>

            </div><!-- Конец текстового контента -->
        </div><!-- Конец карточки -->
        @endforeach
    </div>
@endsection