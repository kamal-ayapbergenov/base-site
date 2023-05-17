<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index() 
    {
        $posts = DB::table('posts')->orderBy('id','DESC')->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function details($slug) 
    {
        $posts = Post::where('slug', $slug)->first();
        $lastnews = Post::orderBy('id','DESC')->take(4)->get();
        $keywords = DB::table('posts')->orderBy('id','DESC')->paginate(6);
        $des = DB::table('posts')->orderBy('id','DESC')->paginate(6);


        return view('posts.details', compact('posts', 'lastnews', 'keywords', 'des'));
    }
}
