<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/73a1d8fd03.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('template.navbar')

    <div class="container p-8 mx-auto mt-5">
        @yield('content')
    </div>
    
</body>
</html>