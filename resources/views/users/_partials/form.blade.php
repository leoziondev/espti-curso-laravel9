<div class="w-full bg-white rounded px-8 py-12 mt-4">
  @csrf
  <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="bg-gray-50 appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none my-2">
  <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}" class="bg-gray-50 appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none my-2">
  <input type="password" name="password" placeholder="Senha:" class="bg-gray-50 appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none my-2">
  <input type="file" name="image" class="bg-gray-50 appearance-none border border-gray-100 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none my-2">
  
  <div class="flex justify-end">
    <button type="submit" class="shadow bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-8 rounded mt-4">
      Enviar
    </button>
  </div>
</div>