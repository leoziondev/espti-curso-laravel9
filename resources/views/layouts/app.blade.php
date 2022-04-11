<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - EspecializaTI</title>

  <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  <div class="p-4">
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <div class="flex justify-end items-center text-red-400">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
          </svg>
        </div>
        <button type="submit" class="ml-2">Logout</button>
      </div>
    </form>
  </div>
  
  <div class="container mx-auto px-4 py-8">
    @yield('content')
  </div>

</body>
</html>