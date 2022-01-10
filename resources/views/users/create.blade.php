<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
</head>
<body>
       <h1>User From Create</h1>

       <form action="{{url("user/store")}}" method="POST">
         @csrf
             Name :<input type="text" name="name" placeholder="Name"><br><br>
             Email :<input type="email" name="email" placeholder="email"><br><br>
             Password :<input type="password" name="password" placeholder="Password">
             <button type="submit">Register</button>
       </form>
</body>
</html>