<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $artikel = Article::all();
        return view('article',['artikel' => $artikel]);
    }
}
