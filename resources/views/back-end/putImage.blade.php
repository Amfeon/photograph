@extends('front-end.base')
@section('content')
    {!! Form::open(['action'=>'ImagesController@index', 'files'=>'true']) !!}
    {!! Form::text('email','1',['class' => 'awesome']) !!}
    {!! Form::file('image',['class' => 'awesome', 'accept'=>'image/jpeg']) !!}
    {!! Form::submit('отправить') !!}
    {!! Form::close() !!}
@stop

