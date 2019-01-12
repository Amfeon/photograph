@extends('back-end.admin-base')
@section('content')
    <div class="row flex-column">
        <h3 class="alert alert-info">Редактирование фотосессии </h3>
        <div class="row flex-column">
            <h4 >Миниатюка фотосессии</h4>
            <div class="row">
                <div class="col-lg-3">
                    <img id="thumnailImage" src="/storage/{{$data['thumnail']}}" width="200" height="150">
                </div>
            </div>
        </div>
        <div class="row">
            <input type="file" name="thumnailEdit"  id="thumnailEdit" style="margin: 20px">
        </div>
        {!! Form::open(['action'=>'GalleryController@storeUpdate', 'files'=>'true', 'class'=>'bottoms_block']) !!}
        <div class="form-group">
            {!! Form::label('text','Название фотосесии') !!}
            {!! Form::text('title', $data['title'],['class'=>'form-control form-control-lg','placeholder'=> 'Название фотосессии']) !!}
        </div>
        <div class="custom-file">
            {!! Form::label('image','Выбери картинки для добавления фотосессии', ['class'=>'custom-file-label' , 'id'=>'label_images']) !!}
            {!! Form::file('image[]',['class' => 'custom-file-input','id'=>'images', 'accept'=>'image/jpeg', 'multiple'=>'true']) !!}
        </div>
            {!! Form::label('text','Осисание фотосесии') !!}
            {!! Form::textarea('text', $data['text'],['id'=>'summernote']) !!}
            {!! Form::hidden('id', $data['id']) !!}
            {!! Form::hidden('thumnail', $data['thumnail'], ['id'=>'thumnail']) !!}
            {!! Form::submit('обновить', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
   </div>
    <h3>Фотографии в фотосессии</h3>
<div class="row"> {{-- Сделать удаление файлов--}}
    {!! Form::open(['route' =>'delete-images', 'files'=>'true']) !!}
    <ul class="imageList">
    @foreach($images as $image)
        <li><input   class="checkbox" type="checkbox" name="{{$image->sourse}}" value="{{$image->id}}"><img src="/storage/{{$image->sourse}}" width="150" ></li>
    @endforeach
    </ul>
    {!! Form::submit('удалить', ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
</div>
@endsection