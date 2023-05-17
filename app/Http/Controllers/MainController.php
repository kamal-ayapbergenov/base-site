<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class MainController extends Controller
{
    public function index() 
    {
        $posts = Post::where('status', 'published')->orderBy('updated_at','DESC')->get()->take(4);
        
        return view('index', ['posts' => $posts]);
    }


}
