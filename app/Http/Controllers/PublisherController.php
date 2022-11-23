<?php

namespace App\Http\Controllers;

use App\Models\Publishers;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publish = Publishers::all();
        return view('publish', compact('publish'));
    }
}
