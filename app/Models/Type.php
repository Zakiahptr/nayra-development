<?php

namespace App\Models;

use App\Models\Residence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function residence()
    {
        return $this->belongsTo((Residence::class));
    }
}
