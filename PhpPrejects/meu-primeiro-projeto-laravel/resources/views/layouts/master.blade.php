<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Página')</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <script src="{{ asset('app.js') }}"></script>
</head>
<body>
    @yield('content')
</body>
</html>
