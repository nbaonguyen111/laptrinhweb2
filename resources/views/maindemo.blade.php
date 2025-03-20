<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-danger ">
        <div class="container-fluid d-flex justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item"> <a href="" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link  text-white">Đăng Nhập</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Đăng Ký</a></li>
        </ul>
    </div>

    </nav>
    </header>
    <div class="content">
        @yield('content')
    </div> 
        
    <footer class="bg-danger text-white py-3 mt-3 bottom-0 w-100">
    <h1 class="text-center">Lập Trình Web 2025@Nguyễn Bảo Nguyên</h1>
</footer>
</body>

</html>