<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Userinfo</title>
    <style>
    .container{
        display: inline-block;
        padding: 20px;
        margin-left: 40%;
        margin-top: 10%;
        width: 200px;
        text-align: center;
        background-color: #3BABFD;
        box-shadow: 0 5px 15px rgba(93,93,93,1);
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello</h1>
        <p>User Info</p>
        <br>
        id: {{$id}}
        <br>
        course: {{$course}}
    </div>
</body>
</html>
