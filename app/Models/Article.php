<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const IMAGE_PATH = 'images/articlePict';

    public function thumbnail()
    {
        return Storage::url($this->thumbnail);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
