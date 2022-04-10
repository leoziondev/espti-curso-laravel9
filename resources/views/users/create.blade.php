@extends('layouts.app')
@section('title', 'Novo Usuário')

@section('content')
  <h1>Novo Usuário</h1>

  @if ($errors->any())
    <ul class="errors">
      @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  
  <form action="{{ route('users.store') }}" method="post">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome" />
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />

    <button type="submit">Cadastrar</button>
  </form>
@endsection