@extends('back-end.admin-base')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="item text-center">
                <h3 class="item__title ">Слайдер</h3>
                <a href="/add-slider" class="btn btn-primary">добавить слайд</a>
                <a href="/show-slider" class="btn btn-warning">удалить слайд</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item"></div>
        </div>
        <div class="col-lg-4">
            <div class="item"></div>
        </div>
    </div>
@endsection