<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post details page</h1>

     <ul>
         <li>{{$post->title}}</li>
         <li>{{$post->description}}</li>
         <hr>
     </ul>

     <h4>Comment list: </h4>
     @foreach($post->comments as $comment)
         <li>{{$comment->comment_body}}</li>    
     @endforeach

     <h1>Create comment</h1>

     <form action="{{url("comment/store/$post->id")}}" method="post">
        @csrf
       Comment_body  : <input type="text" name="comment_body"><br><br>
       <button type="submit">Create</button>
    </form>

    <h4>tag list: </h4>
     @foreach($post->tags as $tag)
         <li>{{$tag->tag_name}}</li>    
     @endforeach
    
     <h1>new add tag</h1>
     <form action="{{url("tag/store")}}" method="post">
        @csrf
       Tag name  : <input type="text" name="tag_name"><br><br>
       <button type="submit">Create</button>
    </form>
</body>
</html>