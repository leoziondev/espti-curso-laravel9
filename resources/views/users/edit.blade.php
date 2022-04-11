@extends('layouts.app')
@section('title', 'Editar Usuário')

@section('content')
  <h1>Editar Usuário</h1>

  @include('includes.validations-form')
  
  <form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')

    @include('users._partials.form')
    <button type="submit">Salvar edição</button>
  </form>
@endsection