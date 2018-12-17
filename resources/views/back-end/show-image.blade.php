@extends('back-end.admin-base')
@section('content')
<div class="row">

    {!! Form::open(['action'=>'ImagesController@delete']) !!}
    <ul class="imageList">
    @foreach($data as $image)

        <li><input   class="checkbox" type="checkbox" name="{{$image}}" value="{{$image}}"><img src="storage\{{ $image }}" width="500" height="500"></li>
    @endforeach
    </ul>
    {!! Form::submit('удалить') !!}
    {!! Form::close() !!}

</div>
@endsection


