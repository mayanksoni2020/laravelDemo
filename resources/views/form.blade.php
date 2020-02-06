<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
    .container{
        display: inline-block;
        padding: 20px;
        margin-left: 40%;
        margin-top: 10%;
        background-color: #3BABFD;
        box-shadow: 0 5px 15px rgba(93,93,93,1);
    }
        li{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action ="userform" method="POST">@csrf
        First Name: <input type="text" name="fname" autofocus>
        @error('fname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>
        
        Last Name: <input type="text" name="lname">
        @error('lname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Gender: 
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        @error('gender')
        <div style="color: red;">*{{$message}}</div>
        @enderror
        <br><br>

        Father's Name: <input type="text" name="fatname">
        @error('fatname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Mother's Name: <input type="text" name="motname">
        @error('motname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Email: <input type="text" name="email">
        @error('email')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Mobile No.: <input type="number" name="mob">
        @error('mob')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        School Name: <input type="text" name="sname">
        @error('sname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Stream Name: <input type="text" name="strname">
        @error('strname')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Current CGPA: <input type="number" name="cgpa">
        @error('cgpa')
        <div style="color: red">*{{$message}}</div>
        @enderror
        <br><br>

        Skills:
        <input type="checkbox" name="skill1" value="Programming"> Programming
        <input type="checkbox" name="skill2" value="Designing"> Designing
        <input type="checkbox" name="skill3" value="Gaming"> Gaming
        <br><br>

        <button type="submit">Submit</button>
    </form>
    </div>

    
    <!-- <div>
        <ul>
            @foreach($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        </ul>
    </div> -->
</body>
</html>