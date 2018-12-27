@extends('back-end.admin-base')
@section('content')
    <div class="row flex-column">
        <h3 class="alert alert-info">Создание новой фотосессии </h3>
        {!! Form::open(['action'=>'GalleryController@storeUpdate', 'files'=>'true', 'class'=>'bottoms_block']) !!}
        <div class="form-group">
            {!! Form::text('title', $data['title'],['class'=>'form-control form-control-lg','placeholder'=> 'Название фотосессии']) !!}
        </div>
            {!! Form::label('text','Осисание фотосесии') !!}
            {!! Form::textarea('text', $data['text']) !!}
            {!! Form::hidden('id', $data['id']) !!}
            {!! Form::hidden('thumnail', $data['thumnail'], ['id'=>'thumnail']) !!}
            {!! Form::submit('обновить', ['class'=>'btn btn-success']) !!}

        <div class="row flex-column">
            <h4 >Миниатюка фотосессии</h4>
            <div class="row">
                <div class="col-lg-3">
                    <img id="thumnailImage" src="/storage/{{$data['thumnail']}}" width="200" height="150">
                </div>
            </div>
            </div>
        {!! Form::close() !!}
   </div>
    <div class="row">
        <input type="file" name="thumnailEdit"  id="thumnailEdit" style="margin: 20px">
    </div>
@endsection