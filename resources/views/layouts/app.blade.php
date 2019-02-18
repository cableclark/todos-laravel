<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo list</title>
</head>
<body>
     @include('inc.navbar')
    <div class="container  topmar">
        @yield('content')
    </div>
    <footer class="footer text-center">
        <p> Copyright &copy; 2019 Todo</p>
    </footer>
</body>
</html>