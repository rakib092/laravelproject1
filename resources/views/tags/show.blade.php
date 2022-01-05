<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>tag details page</h1>

    <ul>
        <li>{{$tag->tag_name}}</li>
        <li>{{$tag->is_active}}</li>
        <hr>
    </ul>
    <h1>Post : </h1>

    <ul>
    @foreach($tag->posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    </ul>
  
</body>
</html>