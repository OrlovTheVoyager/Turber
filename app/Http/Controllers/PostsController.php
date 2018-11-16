<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $user_posts = Auth::user()->posts()->latest()->get();

        return view('posts.dashboard', compact('user_posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        
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

        $request->validate([
            'title' => 'required|string|min:1|max:50',
            'languages' => 'required|string|min:1|max:50',
            'location' => 'required|string|min:1|max:50',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'text' => 'required|string|min:10|max:500'
        ]);

        $post = new Post(request(['title', 'languages', 'location', 'date_from', 'date_to', 'text']));

        auth()->user()->publish($post);

        return redirect('/posts/' . $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->hasThisPost($id)) {
            return redirect()->back()->with('message', 'Permission denied.');
        }
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
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
        if (!auth()->user()->hasThisPost($id)) {
            return redirect()->back()->with('message', 'Permission denied.');
        }

        $post = Post::find($id);

        $request->validate([
            'title' => 'required|string|min:1|max:100',
            'languages' => 'required|string|min:1|max:50',
            'location' => 'required|string|min:1|max:50',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'text' => 'required|string|min:1|max:500'
        ]);
        
        $post->title = $request->get('title');
        $post->languages = $request->get('languages');
        $post->location = $request->get('location');
        $post->date_from = $request->get('date_from');
        $post->date_to = $request->get('date_to');
        $post->text = $request->get('text');
        $post->save();

        return redirect('/posts/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasThisPost($id)) {
            return redirect()->back()->with('message', 'Permission denied.');
        }
        Post::find($id)->delete();

        return redirect()->route('posts.index');
    }
}
