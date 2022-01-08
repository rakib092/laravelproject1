<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post details</h1>

    <table style="border-collapse:collapse;" border = "1" width = "50%">
        <tr>
            
            <th>title</th>
            <th>description</th>
            
        </tr>
         <tr>
            <th>{{$post->title}}</th>
            <th>{{$post->description}}</th>     
        </tr>
    </table>

    <h4>Comment List : </h4>

    <ul>
       @foreach($post->comments as $comment)
         <li>{{$comment->comment_body}}</li>
       @endforeach
    </ul>

     <h4>Add New Comment : </h4>
    <form action="{{url("comment/create/$post->id")}}" method="POST">
        @csrf
        <input type="text" name="comment_body">
        <button type="submit">Submit</button>
    </form>

    <h4>Tag List: </h4>
     @foreach($post->tags as $tag)
     <li>{{$tag->tag_name}}</li>
     @endforeach
     
    <h4>Add New Tag : </h4>
    <form action="{{url("tag/create")}}" method="POST">
        @csrf
        <input type="text" name="tag_name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>