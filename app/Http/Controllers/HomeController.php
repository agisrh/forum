<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $posts = DB::table('posts')
            ->leftjoin('comments', 'comments.post_id', '=', 'posts.id')
            ->join('users AS author', 'author.id', '=', 'posts.user_id')
            ->select('posts.*', 'author.name AS author_name', 'author.email AS author_email', DB::raw("count(comments.id) as count"))
            ->orderBy('created_at', 'DESC')
            ->groupBy('posts.id')
            ->get();
        
        $users = DB::table('users')
            ->join('posts', 'posts.user_id', '=', 'users.id')
            ->select('users.*', DB::raw("count(posts.id) as count"))
            ->orderBy('count', 'DESC')
            ->groupBy('users.id')
            ->skip(0)
            ->take(4)
            ->get();

        return view('home',compact('posts', 'users'));
    }

    public function welcome() 
    {
        $posts = DB::table('posts')
            ->leftjoin('comments', 'comments.post_id', '=', 'posts.id')
            ->join('users AS author', 'author.id', '=', 'posts.user_id')
            ->select('posts.*', 'author.name AS author_name', 'author.email AS author_email', DB::raw("count(comments.id) as count"))
            ->orderBy('created_at', 'DESC')
            ->groupBy('posts.id')
            ->get();
        
        $users = DB::table('users')
            ->join('posts', 'posts.user_id', '=', 'users.id')
            ->select('users.*', DB::raw("count(posts.id) as count"))
            ->orderBy('count', 'DESC')
            ->groupBy('users.id')
            ->skip(0)
            ->take(4)
            ->get();

        return view('welcome', compact('posts', 'users'));
    }

    public function read($id)
    {
        $post = DB::table('posts')
            ->join('users AS author', 'author.id', '=', 'posts.user_id')
            ->select('posts.*', 'author.name AS author_name', 'author.email AS author_email')
            ->where('posts.id', $id)
            ->first();

        $comment = DB::table('comments')
            ->join('users AS comantators', 'comantators.id', '=', 'comments.user_id')
            ->select('comments.*', 'comantators.name AS comment_name')
            ->where('comments.post_id', $id)
            ->get();

        $users = DB::table('users')
            ->join('posts', 'posts.user_id', '=', 'users.id')
            ->select('users.*', DB::raw("count(posts.id) as count"))
            ->orderBy('count', 'DESC')
            ->groupBy('users.id')
            ->skip(0)
            ->take(4)
            ->get();

        return view('post.read',compact('post', 'comment', 'users'));
    }

}
