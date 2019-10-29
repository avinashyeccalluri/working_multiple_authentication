<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Admin;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function viewbooks(){
        $book=Book::all();
        return view('Home.viewbooks',compact('book'));
    }
    public function getdetails(Book $book){
        return view('Home.getdetails',compact('book'));
    }
    public function placedorder(Book $book){
        return view('Home.placedorder',compact('book'));
    }
}
