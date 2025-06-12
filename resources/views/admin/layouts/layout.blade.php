<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
       @include('admin.layouts.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('admin.layouts.footer')
    </footer>
</body>
</html>
