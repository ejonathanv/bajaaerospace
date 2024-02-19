<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description ?? '';
        $article->slug = Str::slug($request->title);
        
        $thumb = $request->file('magazineThumb');
        $thumbName = time() . '.' . $thumb->getClientOriginalExtension();
        $thumb->move(public_path('articles'), $thumbName);

        $article->magazineThumb = $thumbName;

        if($request->hasFile('magazineFile')){
            $file = $request->file('magazineFile');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('articles'), $fileName);
            $article->magazineFile = $fileName;
        } else {
            $article->magazineUrl = $request->magazineUrl;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Artículo creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->title = $request->title;
        $article->description = $request->description ?? '';
        $article->slug = Str::slug($request->title);

        if($request->hasFile('magazineThumb')){
            $thumb = $request->file('magazineThumb');
            $thumbName = time() . '.' . $thumb->getClientOriginalExtension();
            $thumb->move(public_path('articles'), $thumbName);
            $article->magazineThumb = $thumbName;
        }

        if($request->hasFile('magazineFile')){
            $file = $request->file('magazineFile');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('articles'), $fileName);
            $article->magazineFile = $fileName;
            $article->magazineUrl = null;
        } else {
            $article->magazineUrl = $request->magazineUrl;
            $article->magazineFile = null;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Artículo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artículo eliminado correctamente');
    }
}
