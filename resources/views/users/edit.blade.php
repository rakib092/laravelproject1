<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
      <h1>Edit Form</h1>
      
      <form action="{{url("user/update/$user->id")}}" method="POST">
        @csrf
         Name : <input type="text" name="name" value="{{$user->name}}"><br><br>
         Email : <input type="text" name="email" value="{{$user->email}}"><br><br>
         <button type="submit">Update</button>
      </form>
       
  </table>
</body>
</html>