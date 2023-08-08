<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('/layouts/header')

    <div class="main-content">
        @yield('content')
    </div>

    @include('/layouts/footer')
</body>
</html>
