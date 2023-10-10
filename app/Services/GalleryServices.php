<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;


class GalleryServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        $image = $request->file('image')->store(Gallery::IMAGE_PATH);
        $data['image'] = $image;


        Gallery::create($data);
    }


    public function handleDestroy($gallery)
    {
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();
    }
}
