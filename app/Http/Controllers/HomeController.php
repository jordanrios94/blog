<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function home()
    {
        $posts = Post::paginate(5);

        return view('welcome', [
            'posts' => $posts
        ]);
    }
}
