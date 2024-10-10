<?php

namespace App\Http\Controllers;

use App\Models\VideoPost;
use Illuminate\Support\Str;
use App\Http\Requests\StoreVideoPostRequest;
use App\Http\Requests\UpdateVideoPostRequest;

class VideoPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = VideoPost::orderBy('published_at', 'desc')->paginate(10);
        return view('admin.video-posts.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video-posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoPostRequest $request)
    {

        $coverPath = null;

        if($request->has('cover')){
            $cover = $request->file('cover');
            // Vamos a mover el archivo a la carpeta video-covers de la carpeta publica
            $coverName = hexdec(uniqid()).'.'.$cover->getClientOriginalExtension();
    
            // Vamos a verificar si la carpeta videoCovers existe, si no existe la vamos a crear
            if(!is_dir(public_path('videoCovers'))){
                mkdir(public_path('videoCovers'), 0777, true);
            }
    
            $cover->move(public_path('videoCovers'), $coverName);
            $coverPath = 'videoCovers/'.$coverName;
        }

        try{
            $video = new VideoPost();
            $video->title = $request->title;
            $video->description = $request->description;
            $video->youtube_video_id = $request->youtube_video_id ?? '';
            $video->source = $request->source;
            $video->cover = $coverPath;
            $video->embed_code = $request->embed_code ?? '';
            $video->slug = Str::slug($request->title);
            $video->is_published = $request->has('is_published');
            $video->published_at = $request->published_at;
            
            $video->save();

            return redirect()->route('video-posts.show', $video)->with('success', 'Video post created successfully');
        }catch(\Exception $e){
            info($e->getMessage());
            return redirect()->back()->withErrors('Error creating video post');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoPost $video)
    {
        return view('admin.video-posts.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoPost $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoPostRequest $request, VideoPost $video)
    {
        $coverPath = $video->cover;

        if($request->has('cover')){
            $cover = $request->file('cover');
            // Vamos a mover el archivo a la carpeta video-covers de la carpeta publica
            $coverName = hexdec(uniqid()).'.'.$cover->getClientOriginalExtension();
    
            // Vamos a verificar si la carpeta videoCovers existe, si no existe la vamos a crear
            if(!is_dir(public_path('videoCovers'))){
                mkdir(public_path('videoCovers'), 0777, true);
            }
    
            $cover->move(public_path('videoCovers'), $coverName);
            $coverPath = 'videoCovers/'.$coverName;
        }

        try{
            $video->title = $request->title;
            $video->description = $request->description;
            $video->youtube_video_id = $request->youtube_video_id ?? '';
            $video->source = $request->source;
            $video->cover = $coverPath;
            $video->embed_code = $request->embed_code ?? '';
            $video->slug = Str::slug($request->title);
            $video->is_published = $request->has('is_published');
            $video->published_at = $request->published_at;
            
            $video->save();

            return redirect()->route('video-posts.show', $video)->with('success', 'Video post updated successfully');

        }catch(\Exception $e){          
            info($e->getMessage());
            return redirect()->back()->withErrors('Error updating video post');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoPost $video)
    {
        try{
            $video->delete();
            return redirect()->route('video-posts.index')->with('success', 'Video post deleted successfully');
        }catch(\Exception $e){
            info($e->getMessage());
            return redirect()->back()->withErrors('Error deleting video post');
        }
    }
}
