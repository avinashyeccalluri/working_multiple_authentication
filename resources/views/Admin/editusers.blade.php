<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="/admin/{{$user->id}}/update" method="post">
@csrf
@method('PATCH')
  Name: <input type="text" name="name" value="{{$user->name}}"> <br> <br>
  Email: <input type="text" name="email" value="{{$user->email}}"> <br> <br>
  <input type="submit" value="Edit">
  </form>

  <form action="/admin/{{$user->id}}/delete" method="post"> <br> <br>
  @csrf
  @method('DELETE')
  <input type="submit" value="Delete">
  </form>
</body>
</html>