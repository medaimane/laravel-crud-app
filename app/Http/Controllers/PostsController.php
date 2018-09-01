<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // $post = Post::where('title', '')->get();
        // $post = DB::select('SELECT * FROM posts');
        // $posts = Post::orderBy('created_at', 'desc')->take(2)->get(); // or asc
        // $posts = Post::orderBy('created_at', 'desc')->get(); // or asc

        $posts = Post::orderBy('created_at', 'desc')->paginate(10); // or asc
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        if($post->save()) {
            return redirect('/posts')->with('success', 'Post created with success');
        } else {
            return redirect('/posts')->with('error', 'Post can\'t created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        if(!is_null($post)){
            return view('posts.show', compact('post'));
        } else {
            return redirect('/posts')->with('error', '504 : Post not found!.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        if(!is_null($post)) {
            return view('posts.edit', compact('post'));
        } else {
            return redirect('/posts')->with('error', '504 : Post not found!.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::findOrFail($id);
        if(!is_null($post)) {
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->update();
            return redirect('/posts/'.$id)->with('success', 'Post updated with success');
        } else {
            return redirect('/posts/'.$id)->with('error', '504 : Post can\'t updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(!is_null($post)) {
            $post->delete();
            return redirect('/posts')->with('success', 'Post deleted with success');
        } else {
            return redirect('/posts/'.$id)->with('error', '504 : Post can\'t deleted.');
        }
    }
}
