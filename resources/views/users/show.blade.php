@extends('layout.app')

@section('title','Lista de Usuario')
    

@section('content')
<h1>Lista de Usuarios {{$user -> name}}</h1>
<ul>
    <li>
      {{ $user ->name }}  -
      {{ $user ->email }}  
    </li>
</ul>
@endsection
