<?php

namespace App\Http\Controllers\Guest;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function article()
    {
        $articles = Article::latest()->get();
        return view('pages.article', compact('articles'));
    }

    public function detail(Article $article)
    {
        return view('pages.articleDetail', compact('article'));
    }
}
