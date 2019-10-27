<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin');
    }
    public function showbooks(){
        $books=Book::all();
        return view('Admin.showbooks',compact('books'));
    }
}
