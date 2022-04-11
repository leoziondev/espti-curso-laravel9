@extends('layouts.app')
@section('title', 'Editar Usuário')

@section('content')
  <h1 class="text-2xl font-semibold leading-tigh py-2">Editar Usuário</h1>

  @include('includes.validations-form')
  
  <form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')

    @include('users._partials.form')
  </form>
@endsection