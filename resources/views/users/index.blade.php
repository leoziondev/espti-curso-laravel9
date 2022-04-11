@extends('layouts.app')
@section('title', 'Listagem de Usuarios')

@section('content')

<div class="flex justify-between align-items">
  <h1 class="text-xl font-bold">
    Listagem dos usuários  
  </h1>
  <a
    href="{{ route('users.create') }}"
    class="bg-indigo-500 hover:bg-indigo-400 text-sm text-white font-semibold rounded-md px-4 py-1"
  >
    Cadastrar usuário
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
          Nome
        </th>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          E-mail
        </th>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          Editar
        </th>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          Detalhes
        </th>
        <th
          class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
        >
          Comentários
        </th>
      </tr>
    </thead>
    <tbody>
  @foreach ($users as $user)
      <tr>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <div class="flex items-center">
                @if ($user->image)
                  <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}" class="w-10 h-10 object-cover rounded-full">
                @else
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                @endif
                <h2 class="text-normal font-semibold ml-2">{{ $user->name }}</h2>
              </div>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 rounded-full py-2 px-6">Editar</a>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
              <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
          </td>
          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('comments.index', $user->id) }}" class="bg-blue-200 rounded-full py-2 px-6">Anotações ({{ $user->comments->count() }})</a>
        </td>
      </tr>
  @endforeach
  </tbody>
</table>

<div class="py-4">
  {{ $users->appends([
    'search' => request()->get('search', '')
  ])->links() }}
</div>

@endsection