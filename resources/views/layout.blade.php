<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
    <div class="header">
        <h1>Header part</h1>
    </div>
    @show

    <div class="content">
        @yield('content');
    </div>

    @section('footer')
    <div class="footer">
        <h1>Footer part</h1>
    </div>
    @show
</body>

<style>
.header{
    padding: 20px;
    background-color: antiquewhite;
    text-align: center;
}
.footer{
    padding: 20px;
    background-color: antiquewhite;
    text-align: center;
}
.content{
    height: 500px;
    padding: 20px;
    background-color: #b2a3b9;
    text-align: center;
}
</style>

</html>