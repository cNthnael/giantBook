<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $cate = Categories::all();
        return view('template', compact('cate'));
    }

    public function view($id){
        $category = Categories::query()->where('id',$id)->first();
        return view('template', compact('category'));
    }
}
