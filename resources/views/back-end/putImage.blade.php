@extends('front-end.base')
@section('content')
    {!! Form::open(['action'=>'ImagesController@index', 'files'=>'true']) !!}
    {!! Form::text('email','1',['class' => 'awesome']) !!}
    {!! Form::file('image',['class' => 'awesome', 'accept'=>'image/jpeg']) !!}
    {!! Form::submit('отправить') !!}
    {!! Form::close() !!}
@stop


{!! Form::open(['action'=>'ImagesController@delete']) !!}
@foreach($data as $image)
    <input class="checkbox" type="checkbox" name="{{$image}}" value="{{$image}}"><img src="storage\{{ $image }}" width="500" height="500">

@endforeach
{!! Form::submit('отправить') !!}
{!! Form::close() !!}