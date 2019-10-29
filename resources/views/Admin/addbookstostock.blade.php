<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h3><a href="/admin" >Home</a></h3> <br> <br>
@foreach($errors->all() as $e)
<li>{{$e}}</li>
@endforeach
<form action="/admin/storebooks" method="post">
  <h1> Book adding page</h1>
  @csrf
  Book Name: <input type="text" name="Book_Name" id=""> <br>
  Book Author: <input type="text" name="Book_Author" id=""> <br>
  Stock Quantity: <input type="text" name="Qunatity_Available" id=""> <br>
  <input type="submit" value="Add Book">
  </form>
</body>
</html>