@extends('layouts.app')
@section('title', "Comentários do usuário: {$user->name}")

@section('content')

<div class="flex justify-between align-items">
  <h1 class="text-xl font-bold">
    Comentários do usuário: {{  $user->name }}
  </h1>
  <a
    href="{{ route('comments.create', $user->id) }}"
    class="bg-indigo-500 hover:bg-indigo-400 text-sm text-white font-semibold rounded-md px-4 py-1"
  >
    Nova anotação
  </a>
</div>

<form action="{{ route('comments.index', $user->id) }}" method="get" class="py-5">
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
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ações</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($comments as $comment)
      <tr>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              {{ $comment->body }}
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $comment->visible ? 'Sim' : 'Não'}}</td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a href="{{ route('comments.edit', [$user->id, $comment->id]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@endsection