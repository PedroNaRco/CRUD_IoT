<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dispositivos IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        @if (Auth::check())
            <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>

        @endif
        @yield('content')
        
    </div>
</body>

</html>
