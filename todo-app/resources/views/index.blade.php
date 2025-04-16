@extends('layout.master')
@section('content')
<div class="container">
        <div class="row my-5">
            <div class="col-md-12 text-end">
                <a href="{{route('create')}}" class="btn btn-primary my-3"><i>Todo Ekle</i></a> 
            </div>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{Session::get('success')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{Session::get('error')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    <table class="table table-striped" >
        <thead>
            <tr>
            <th scope="col"><i>#</i></th>
            <th scope="col"><i>BAŞLIK</i></th>
            <th scope="col"><i>Açıklama</i></th>
            <th scope="col"><i>YAPILDI MI?</i></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $key=> $todo)
            <tr>
            <th >{{$key+1}}</th>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
            <td>{{$todo->completed}}</td>
            <td>
                <a href="{{route('show' ,$todo->id)}}" class="btn btn-info"><i>GÖSTER</i></a>
                <a href="{{route('edit' ,$todo->id)}}" class="btn btn-warning"><i>DÜZENLE</i></a>
                <a href="{{route('destroy' ,$todo->id)}}" class="btn btn-danger"><i>Sil</i></a>                       
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection