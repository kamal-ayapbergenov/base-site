<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function index()
    {

        $pages = DB::table('pages')->where('status', 'ACTIVE')->orderBy('id','DESC')->paginate(4);

        return view('pages.index', compact('pages'));
    }

    public function details($slug) 
    {
        $posts = Post::take(5)->get();
        $pages = Pages::where('slug', $slug)->first();

        return view('pages.details', compact('posts', 'pages'));
    }
}
