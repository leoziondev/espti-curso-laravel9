@extends('layouts.app')
@section('title', 'Novo Usuário')

@section('content')
  <h1>Novo Usuário</h1>
  
  <form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="text" name="name" placeholder="Nome" />
    <input type="email" name="email" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />

    <button type="submit">Cadastrar</button>
  </form>
@endsection