<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BooksController extends Controller
{
    public function show_books(){
        $all_books =Books::all();
        return view('books_list',['list_of_books'=>$all_books]);
        

    }
    //
}
