<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book = Books::all();
        return view('index', compact('book'));
    }

    public function view($id){
        $detail = Books::query()->where('id', $id)->first();
        return view('detail.book', compact('detail'));
    }
}
