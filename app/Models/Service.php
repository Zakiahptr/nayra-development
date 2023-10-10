<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const IMAGE_PATH = 'images/serviceIcon';

    public function serviceIcon()
    {
        return Storage::url($this->service_icon);
    }
}
