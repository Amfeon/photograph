@extends('back-end.admin-base')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Телефон</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
        <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['name']}}</td>
            <td>{{$item['phone']}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection