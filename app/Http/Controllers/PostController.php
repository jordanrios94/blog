<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        /* 
            TODO:
                - CREATE VIEW FOR POST
                - 
        */

        return view('pages.post', [
            'post' => $post
        ]);
        
        // var_dump($slug);
        var_dump($post);
        // die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
