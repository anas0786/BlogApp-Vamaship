<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index(Request $request)
    {

        $posts= Post::paginate(6);
        return view('welcome', compact('posts'));

    }

    public function view(Request $request)
    {
        return view('view');
    }

    public function viewPost(Post $post)
    {
        return view('view',compact('post'));
    }
}
