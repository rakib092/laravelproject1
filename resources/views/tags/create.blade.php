<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>tag </h1>
     <ul>
         @foreach($tags as $tag)
             <li>{{ $tag->tag_name }}</li>
             <li>{{ $tag->is_active }}</li>
             <a href="{{url("tag/show/$tag->id")}}">tag details</a>
             <hr>

         @endforeach
     </ul>
     

     <form action="{{url("tag/store")}}" method="post">
         @csrf
         <input type="text" name="tag_name">
         <button type="submit">Tag Add</button>
     </form>
</body>
</html>