<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('Admin');
    }
    public function showbooks(){
        $books=Book::all();
        return view('Admin.showbooks',compact('books'));
    }
    public function showusers(){
        $user=User::all();
        return view('Admin.showusers',compact('user'));
    }
    public function editusers(User $user){
        return view('Admin.editusers',compact('user'));
    }
    public function updateusers(User $user){
        $user->update(request(['name','email']));
        // dd(request(['name']));
        return redirect('/admin/showusers');
    }
    public function deleteusers(User $user){
        $user->delete();
        return redirect('/admin/showusers');
    }
    public function organizestock(Book $book){
        return view('Admin.updatebooks',compact('book'));
    }
    public function updatestock(Book $book){
        // return 'hello';      
        // echo "request['name']"  ;
        // $book->update(request(['name','author','quantity']));
        
        $a=(request(['Book_Name','Book_Author','Qunatity_Available']));
        $book->update($a);
        // dd($book);
                return redirect ('/admin/showbooks');
    }
    public function addbooks(Book $book){
        return view ('Admin.addbookstostock');
    }
    public function storebooks(Book $book){
        request()->validate(['Book_Name'=>['required','min:3','max:10'],'Book_Author'=>['required','min:3','max:10'],'Qunatity_Available'=>['required','max:3']]);
        $book->create(request(['Book_Name','Book_Author','Qunatity_Available']));
        return redirect('/admin/showbooks');
    }
    public function deletebooks(Book $book){
        $book->delete();
        return redirect('/admin/showbooks');
    }
}
