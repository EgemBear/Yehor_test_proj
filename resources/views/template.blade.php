<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="col-lg-1"></div>
    <div class="col-lg-6"><h1>Привет, пользователь!</h1></div>
    <div class="form-group">
        <div class="col-lg-3">
            <a href="/production/create" class= "btn btn-info">Добавить новый товар</a>
        </div>
        <div class="col-lg-3">
            <a href="/production" class= "btn btn-info">Вывести все товары</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>

</body>
</html>