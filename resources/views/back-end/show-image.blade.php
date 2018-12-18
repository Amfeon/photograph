@extends('back-end.admin-base')
@section('content')
<div class="row">
        <div class="col-lg-6">
            @if(!empty($data))
                {!! Form::open(['action'=>'ImagesController@delete']) !!}
                <ul class="imageList">
                    @foreach($data as $image)
                        <li><input   class="checkbox" type="checkbox" name="{{$image}}" value="{{$image}}"><img src="storage\{{ $image }}" width="500" height="500"></li>
                    @endforeach
                </ul>
                {!! Form::submit('удалить') !!}
                {!! Form::close() !!}
            @else
                <span>Картинок для удаления нет</span>
            @endif
        </div>
        <div class="col-lg-6">
            {!! Form::open(['action'=>'ImagesController@index', 'files'=>'true','class'=>'bottoms_block']) !!}
            {!! Form::file('image[]',['class' => 'awesome', 'accept'=>'image/jpeg','multiple'=>'true']) !!}
            {!! Form::submit('отправить') !!}
            {!! Form::close() !!}

        </div>
</div>
@endsection


