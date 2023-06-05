<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class MainController extends Controller
{
    public function index() 
    {
        dd(App\Models\Post::all());
        $posts = Post::where('status', 'published')->orderBy('updated_at','DESC')->get()->take(4);
        dd($posts);
        return view('index', ['posts' => $posts]);
    }


}
