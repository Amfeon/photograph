@extends('back-end.admin-base')
@section('content')
<div class="row">
        <div class="col-lg-6 d-flex">
            @if(!empty($data))
                {!! Form::open(['route'=>'slider.delete','class'=>'form']) !!}
                <ul class="imageList">
                    @foreach($data as $image)
                        <li><input   class="checkbox" type="checkbox" name="{{$image}}" value="{{$image}}"><img src="/storage/{{ $image }}" ></li>
                    @endforeach
                </ul>
                {!! Form::submit('удалить',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            @else
                <span>Картинок для удаления нет</span>
            @endif
        </div>
        <div class="col-lg-6">
            {!! Form::open(['route'=>'slider.store', 'files'=>'true','class'=>'bottoms_block']) !!}
            {!! Form::labeL('Добавить слайды') !!}
            {!! Form::file('image[]',['class' => 'awesome', 'accept'=>'image/jpeg','multiple'=>'true']) !!}
            {!! Form::submit('Добавить',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
</div>
@endsection


