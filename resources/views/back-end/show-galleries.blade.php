@extends('back-end.admin-base')
@section('content')
    <div class="row flex-column">
            <h3 class="alert alert-info">Создание новой фотосессии </h3>
        {!! Form::open(['action'=>'GalleryController@create', 'files'=>'true', 'class'=>'bottoms_block']) !!}
        <div class="form-group">
            {!! Form::text('title','',['class'=>'form-control form-control-lg','placeholder'=> 'Название фотосессии']) !!}
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Миниатюра</span>
            </div>
            <div class="custom-file">
                {!! Form::label('gallery','Выбери миниатюру', ['class'=>'custom-file-label','id'=>'thumnail_label']) !!}
                {!! Form::file('gallery',['class' => 'custom-file-input','id'=>'thumnail', 'accept'=>'image/jpeg']) !!}
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Фоточки</span>
            </div>
            <div class="custom-file">
                {!! Form::label('image','Выбери картинки фотосессии', ['class'=>'custom-file-label' , 'id'=>'label_images']) !!}
                {!! Form::file('image[]',['class' => 'custom-file-input','id'=>'images', 'accept'=>'image/jpeg', 'multiple'=>'true']) !!}
            </div>
        </div>
            {!! Form::label('text','Осисание фотосесии') !!}
            {!! Form::textarea('text','',['id'=>'summernote']) !!}
        {!! Form::submit('создать', ['class'=>'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
    <h3 class="alert alert-warning">Текуцие фотосессии</h3>
    <div class="row flex-wrap" style="margin-top: 30px">
        @foreach($data as $item)
        <div class="card">
            <div class="card-body text-center"><!-- Начало текстового контента -->
                <h4 class="card-title">{{$item->title}}</h4>
                <img src="/storage/{{$item->thumnail}}" class="card-img" >
                <div class="d-flex justify-content-between" style="margin: 20px 0">
                    <a class="btn btn-warning" href="{{route('gallery.edit',['id'=>$item->id])}}" class="card-link">Редактировать</a>
                    <a class="btn btn-danger" href="{{route('gallery.delete',['id'=>$item->id])}}" class="card-link">Удалить</a>
                </div>

            </div><!-- Конец текстового контента -->
        </div><!-- Конец карточки -->
        @endforeach
    </div>
@endsection