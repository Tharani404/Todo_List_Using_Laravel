<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    @include('libraries.style') {{-- head ek athule CSS dnne --}}
</head>

<body>
    
    @include('components.navbar')

    @yield('content') {{-- meka koheta hri Extend krhm...eke athule thiyen 'section' call kroth content kiyl eka methnin catch krgen run wenne. --}}

    @include('libraries.scripts') {{-- body ek athule JS dnne --}}

    @include('components.footer')
</body>
</html>