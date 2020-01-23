<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'content'   => 'required'
        ]);

        Post::create($request->all());
        return redirect()->route('home')
        ->with('success','Postingan berhasil dibuat...');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

        return view('post.show',compact('post', 'comment', 'users'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
