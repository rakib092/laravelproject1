<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show Post Details</h1>
    <hr>
    <ul>
        <li>{{ $post->title }}</li>
        <li>{{ $post->description }}</li>
    </ul>
    <hr>
    <h4>COMMENTS : </h4>
     <ul>
        @foreach($post->comments as $comment)
           <li>{{ $comment->comment_body }}</li>
        @endforeach
     </ul>
     <form action="{{url("comment/create/$post->id")}}" method="post">
        @csrf
         <input type="text" name="comment_body">
         <input type="submit"  name="save" value="add comment">
     </form>

     <hr>

     <h4>Tag : </h4>
     <ul>
        @foreach($post->tags as $tag)
           <li>{{ $tag->tag_name }}</li>
        @endforeach
     </ul>

      <form action="{{url("tag/store/$post->id")}}" method="post">
        @csrf
         <input type="text" name="tag_name">
         <input type="submit"  name="save" value="add tag">
     </form>
</body>
</html>