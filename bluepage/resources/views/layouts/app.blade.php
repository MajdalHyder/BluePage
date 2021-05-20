<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/layout_styles.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Bleue</title>
    @yield('page_css')
</head>
<body>
<header class="layoutbanner">
        <div class="layouttitle">
        <h1>Page Bleue</h1>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
    <p>Copyright Majd AL HYDER 2021-2022</p>
    </footer>
</body>
</html>