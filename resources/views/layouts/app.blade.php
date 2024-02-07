<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{ route('users.index') }}">Users</a>
        <a href="{{ route('phones.index') }}">Phones</a>
    </nav>
    @yield('content')
    
</body>
</html>