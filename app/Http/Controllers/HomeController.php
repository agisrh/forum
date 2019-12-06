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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->join('users AS author', 'author.id', '=', 'posts.user_id')
            ->select('posts.*', 'author.name AS author_name', 'author.email AS author_email')
            ->orderBy('created_at', 'DESC')
            ->get();
            return view('home',compact('posts'));
    }
}
