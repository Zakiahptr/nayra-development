<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const IMAGE_PATH = 'images/Galleries';

    public function image()
    {
        return Storage::url($this->image);
    }

}
