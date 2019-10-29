<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Show users page</h1>
  <ol>
  @foreach($user as $u)
  <li>{{$u->name}} <a href="/admin/{{$u->id}}/edit">Edit</a></li>
  @endforeach
  </ol>
</body>
</html>