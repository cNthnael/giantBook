<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Models\Publishers;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index($id){
        $publish = Publishers::query()->where('id',$id)->first();
        return view('detail.index', compact('publish'));
    }

    public function view(){
        $book = Books::all();
        return view('detail.index', compact('book'));
    }

}
