@csrf

<input type="text" name="name" value="{{ $user->name ?? old('name') }}" placeholder="Nome" />
<input type="email" name="email" value="{{ $user->email ?? old('email') }}" placeholder="Email" />
<input type="password" name="password" placeholder="Password" />