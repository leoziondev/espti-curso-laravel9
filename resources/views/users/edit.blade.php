@extends('layouts.app')
@section('title', 'Editar Usuário')

@section('content')
  <h1>Editar Usuário</h1>

  @if ($errors->any())
    <ul class="errors">
      @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  
  <form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nome" />
    <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" />
    <input type="password" name="password" placeholder="Password" />

    <button type="submit">Salvar edição</button>
  </form>
@endsection