<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->category = $request->category_id;
        $post->published = $request->has('published') ? true : false;

        $post->save();

        if($request->has('cover')){
            $this->uploadCover($request, $post);
        }

        if($request->has('images')){
            $this->uploadImages($request, $post);
        }

        return redirect()->route('posts.show', $post)->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->category = $request->category_id;
        $post->published = $request->has('published') ? true : false;

        $post->save();

        if($request->has('cover')){
            $this->uploadCover($request, $post);
        }

        if($request->has('images')){
            $this->uploadImages($request, $post);
        }

        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully!');
    }

    public function uploadCover($request, $post)
    {
        $file = $request->file('cover');
        $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        // We need to move this file to public/posts folder
        $file->move('posts', $fileName);

        $post->cover = $fileName;
        $post->save();
    }

    public function uploadImages($request, $post){
        $files = $request->file('images');
        foreach($files as $file){
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            // We need to move this file to public/posts/slides folder
            $file->move('posts/slides', $fileName);
            $image = new PostImage();
            $image->post_id = $post->id;
            $image->name = $fileName;
            $image->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
