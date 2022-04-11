@extends('layouts.app')
@section('title', "Comentários do usuário: {$user->name}")

@section('content')

<div class="flex justify-between align-items">
  <h1 class="text-xl font-bold">
    Comentários do usuário: {{  $user->name }}
  </h1>
  <a
    href="{{ route('users.create') }}"
    class="bg-indigo-500 hover:bg-indigo-400 text-sm text-white font-semibold rounded-md px-4 py-1"
  >
    Nova anotação
  </a>
</div>

<form action="{{ route('users.index') }}" method="get" class="py-5">
  <input type="text" name="search" placeholder="Pesquisar" class="w-1/2 md:w-1/3 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500">
  <button class="shadow bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
  <thead>
      <tr>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          Conteúdo
        </th>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          Visível
        </th>
      </tr>
    </thead>
    <tbody>
  @foreach ($comments as $comment)
      <tr>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              {{ $comment->body }}
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a href="{{ route('users.edit', $comment->visible) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@endsection