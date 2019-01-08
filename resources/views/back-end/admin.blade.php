@extends('back-end.admin-base')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="item text-center">
                <h3 class="item__title ">Слайдер</h3>
                <a href="/edit-slider" class="btn btn-success">изменить слайдер</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item text-center">
                <h3 class="item__title ">Фотосессии</h3>
                <a href="/show-galleries" class="btn btn-success">изменить фотосессии</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item text-center">
              <h3 class="item__title ">Заявки</h3>
              <a href="/show-applications" class="btn btn-success">Показать заявки</a>
            </div>
        </div>
    </div>
    <div class="row">
        {!! Form::open(['action'=>'HomeController@optionsUpdate', 'class'=>'bottoms_block']) !!}
        <div class="form-group">
            {!! Form::label('text','Заголовок') !!}
            {!! Form::text('title', $data->title,['class'=>'form-control form-control-lg','placeholder'=> 'Название фотосессии']) !!}
        </div>
        {!! Form::label('text','Осисание фотосесии') !!}
        {!! Form::textarea('text', $data->text,['id'=>'summernote']) !!}
        {!! Form::hidden('id',$data->id) !!}
        {!! Form::submit('обновить', ['class'=>'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection