<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <div class="container">
        <form>
        User Name: <input type="text" name="uname" autofocus>
        @error('uname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        First Name: <input type="text" name="fname" autofocus>
        @error('fname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        First Name: <input type="text" name="fname" autofocus>
        @error('fname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        </form>
    </div>
</body>
</html>