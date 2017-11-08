<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        
        return view('pages.home', [
            'posts' => $posts
        ]);
    }
}
