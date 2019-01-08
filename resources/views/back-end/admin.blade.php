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
@endsection