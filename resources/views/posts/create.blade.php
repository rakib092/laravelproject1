<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create post</h1>

     <form action="{{url("post/store/$user->id")}}" method="post">
        @csrf
       Title : <input type="text" name="title"><br><br>
       Description : <input type="text" name="description"><br><br>
       <button type="submit">Create</button>
    </form>
</body>
</html>