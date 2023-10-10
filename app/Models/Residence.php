<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Residence extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    const IMAGE_PATH = 'images/residencePict';
    const VIDEO_PATH = 'video/residenceVid';

    public function featuredImage()
    {
        return Storage::url($this->featured_image);
    }

    public function firstImage()
    {
        return Storage::url($this->image_1);
    }

    public function secondImage()
    {
        return Storage::url($this->image_2);
    }

    public function video()
    {
        return Storage::url($this->video);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
