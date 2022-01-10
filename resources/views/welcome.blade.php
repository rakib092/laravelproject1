<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show User list</h1>
    <table border="1" width="300px" style="border-collapse: collapse;">
          <tr>
              <th>sl</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
          @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>
                <th>
                    <a href="{{url("user/edit/$user->id")}}">Edit</a>
                    <a href="{{url("user/delete/$user->id")}}">Delete</a>
                </th>

            </tr>
          @endforeach
    </table>

  
      
</body>
</html>