<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // , ['except' => ['index','show']]
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userId = auth()->user()->id;
        // return  "user_id->".$userId;    
       $posts = Post::where('user_id', $userId)->get();

        // return 'posts->'.$posts;
       return view('home')->with('posts', $posts);
   }
}
