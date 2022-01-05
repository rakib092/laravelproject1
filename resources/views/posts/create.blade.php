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

     <ul>
         @foreach($posts as $post)
             <li style="color: red">{{ $post->title }}</li>
             <li>{{ $post->description }}</li>
             <h4><a href="{{url("post/show/$post->id")}}">View details</a></h4>
             <hr>    
         @endforeach
     </ul>
     
</body>
</html>