<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ArticleServices;
use Illuminate\Routing\Controller;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request, ArticleServices $articleServices)
    {
        $articleServices->handleStore($request);

        return redirect()->route('admin.article.index')->with('status', 'Data Artikel Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.article.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Article $article, ArticleRequest $request, ArticleServices $articleServices)
    {
        $articleServices->handleUpdate($request, $article);

        return redirect()->route('admin.article.index')->with('status', 'Data Artikel Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article, ArticleServices $articleServices)
    {
        $articleServices->handleDestroy($article);

        return redirect()->route('admin.article.index')->with('status', 'Data Artikel Berhasil Dihapus!');
    }
}
