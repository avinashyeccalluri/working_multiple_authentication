<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<ol>
  @foreach($books as $a)
  <li>{{$a->Book_Name}} written by {{$a->Book_Author}} </li>  
  @endforeach
  </ol>
</body>
</html>