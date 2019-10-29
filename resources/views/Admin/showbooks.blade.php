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

<div>
  <a href="/admin/addbookstostock">Add books to stock</a> <br> <br>
  </div>
<ol>
  @foreach($books as $a)
  <li>{{$a->Book_Name}} written by {{$a->Book_Author}} and the stock quantity is {{$a->Qunatity_Available}} <a href="/admin/{{$a->id}}/organizestock">Update or Delete </a> <br> <br> </li>  
  @endforeach  
  </ol>
 
  
  
 
</body>
</html>