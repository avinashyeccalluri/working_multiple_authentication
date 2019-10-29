<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Update book page</h1>
  <form action="/admin/{{$book->id}}/updatestock" method="post">
    @csrf
    @method('PATCH')
    Book Name: <input type="text" name="name" value="{{$book->Book_Name}}"> <br> <br>
    Book Author: <input type="text" name="author" value="{{$book->Book_Author}}"> <br> <br>
    Book Quantity: <input type="text" name="quantity" value="{{$book->Qunatity_Available}}"> <br> <br>
    <input type="submit" value="Update"> <br> <br>
  </form>
  <form action="/admin/{{$book->id}}/deletebooks" method="post">
  @csrf
  @method('DELETE')
  <input type="submit" value="Delete">
  
  </form>
  


</body>
</html>