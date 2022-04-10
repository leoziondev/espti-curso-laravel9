@extends('layouts.app')
@section('title', 'Detalhes do Usuario')

@section('content')

<h1>Detalhes do Usuario</h1>

<p>{{ $user->name }}</p>
<p>{{ $user->email }}</p>
<p>{{ $user->created_at }}</p>

@endsection