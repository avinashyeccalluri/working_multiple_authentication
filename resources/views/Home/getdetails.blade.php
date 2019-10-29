<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>The details of the book is displayed here</h1>
  <form action="/home/{{$book->id}}/placedorder" method="post">
  @csrf
 <strong> Book Name:</strong>{{$book->Book_Name}} <br><br>
 <strong> Book Author:</strong>{{$book->Book_Author}} <br><br>
 <strong> Book Price:</strong>{{$book->Price}} <br><br>
 <input type="submit" value="Place Order">
 </form>
 <a href="/home">Home</a>

</body>
</html>