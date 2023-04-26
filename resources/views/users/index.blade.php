@extends('layout.app')

@section('title','Lista de Usuarios')
    

@section('content')
<h1>Lista de Usuarios</h1> <a href="{{route('users.create')}}">+</a>
<ul>
    @foreach ($users as $user)
    <li>
      {{ $user ->name }}  -
      {{ $user ->email }}  
      <a href="{{route('users.show',$user ->id)}}">Detalhes</a>
      <a href="{{route('users.edit',$user ->id)}}">Editar</a>
    </li>
    @endforeach
</ul>
@endsection