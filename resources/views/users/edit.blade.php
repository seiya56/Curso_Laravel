@extends('layout.app')

@section('title','Criar Usuario')
    

@section('content')
<h1>Editar o Usúario {{$user->name}}</h1>
@if ($errors->all())
    <ul class="errors">
        @foreach ($errors->all() as $erro)
            <li class="error">
                {{$erro}}
            </li>
            
        @endforeach
    </ul>
@endif
<form action="{{ route('users.update',$user->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome : " value="{{$user->name}}">
    <input type="email" name="email" placeholder="Email : " value="{{$user->email}}">
    <input type="password" name="password" placeholder="Senha :" >
    <button type="submit">
        Editar
    </button>
    <a href="{{route('users.index')}}">Voltar</a>
</form>

@endsection