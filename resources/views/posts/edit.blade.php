<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="{{url("post/update/$post->id")}}" method="post">
     @csrf
       Title:  <input type="text" name="title" value="{{ $post->title }}">
       Description : <input type="text" name="description" value="{{ $post->description }}">
       <button type="submit">Update</button>
    </form>
</body>
</html>