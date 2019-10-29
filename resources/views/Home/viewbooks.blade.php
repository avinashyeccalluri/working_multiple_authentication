<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>The books are </h1>
  @foreach($book as $b)
  <li>{{$b->Book_Name}} <a href="/home/{{$b->id}}/getdetails">View</a></li>
  @endforeach
</body>
</html>
