<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

@include('Menu')

<div>
    @yield('content')
</div>

@include('Footer')

</body>
</html>
