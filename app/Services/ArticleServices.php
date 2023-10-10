<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;


class ArticleServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        $data['slug'] = str()->slug($data['article_title']);
        $thumbnail = $request->file('thumbnail')->store(Article::IMAGE_PATH);
        $data['thumbnail'] = $thumbnail;


        Article::create($data);
    }
    public function handleUpdate($request, $article)
    {
        $data = $request->validated();
        $data['slug'] = str()->slug($data['article_title']);

        if ($request->hasFile('thumbnail')) {
           Storage::delete($article->thumbnail);
           $data['thumbnail'] = $request->file('thumbnail')->store(Article::IMAGE_PATH);
        }



        $article->update($data);
    }

    public function handleDestroy($article)
    {
        Storage::delete($article->thumbnail);
        $article->delete();
    }
}
