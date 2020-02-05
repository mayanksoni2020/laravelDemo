<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        li{
            color: red;
        }
    </style>
</head>
<body>
    <form action ="userform" method="POST">
        Name: <input type="text" name="user">
        @error('user')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        Password: <input type="password" name="password">
        @error('password')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        <button type="">Submit</button>
    </form>
    <!-- <div>
        <ul>
            @foreach($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        </ul>
    </div> -->
</body>
</html>