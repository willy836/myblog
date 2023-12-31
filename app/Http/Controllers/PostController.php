<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::with('category', 'author')->orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->filter(request(['search']))->get();
        $categories = Category::all();

        return view('posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | min:3 |max:20',
            'body' => 'required |min:50',
            'category_id' => 'required'
        ]);

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $validatedData = $request->validate([
            'title' => 'required | min:3 |max:20',
            'body' => 'required |min:50'
        ]);
        
        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post was deleted successfully.');
    }
}
