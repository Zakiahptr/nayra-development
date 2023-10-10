<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workflow extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const IMAGE_PATH = 'images/workflowIcon';

    public function flowIcon()
    {
        return Storage::url($this->flow_icon);
    }
}
