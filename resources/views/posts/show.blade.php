<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show Post list</h1>

    <table border="1" width="300px" style="border-collapse: collapse;">
        <tr>
            <th>sl</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($posts as $post)
          <tr>
              <th>{{$post->id}}</th>
              <th>{{$post->title}}</th>
              <th>{{$post->description}}</th>
              <th>
                  <a href="{{url("post/edit/$post->id")}}">Edit</a>
                  <a href="{{url("post/delete/$post->id")}}">Delete</a>
                  <a href="{{url("post/display/$post->id")}}">Veiw Details</a>
              </th>

          </tr>
        @endforeach
  </table>
</body>
</html>