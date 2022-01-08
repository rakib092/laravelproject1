<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post List</h1>
    <table style="border-collapse:collapse;" border = "1" width = "50%">
        <tr>
            <th>sl</th>
            <th>title</th>
            <th>description</th>
            <th>Show details</th>
            <th>Action</th>
        </tr>
       
            @foreach($post_list as $post)
            <tr>
                <th>{{$post->id}}</th>
                <th>{{$post->title}}</th>
                <th>{{$post->description}}</th>
                <th><a href="{{url("post/show/$post->id")}}">Veiw details</a></th>
                <th>
                    <a href="{{url("post/edit/$post->id")}}">Edit</a>
                    
                     <form action="{{"post/delete/$post->id"}}" method="post">
                        @csrf
                        @method('delete')
                          <button type="submit">Delete</button>
                     </form>
                </th>
               

            </tr>
            @endforeach  
            
    </table>
</body>
</html>