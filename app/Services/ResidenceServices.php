<?php

namespace App\Services;

use App\Models\Residence;
use Illuminate\Support\Facades\Storage;


class ResidenceServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        $data['slug'] = str()->slug($data['residence_name']);
        $featured_image = $request->file('featured_image')->store(Residence::IMAGE_PATH);
        $data['featured_image'] = $featured_image;
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1')->store(Residence::IMAGE_PATH);
            $data['image_1'] = $image_1;
        }
        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2')->store(Residence::IMAGE_PATH);
            $data['image_2'] = $image_2;
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video')->store(Residence::VIDEO_PATH);
            $data['video'] = $video;
        }
        Residence::create($data);
    }
    public function handleUpdate($request, $residence)
    {
        $data = $request->validated();
        $data['slug'] = str()->slug($data['residence_name']);

        if ($request->hasFile('featured_image')) {
           Storage::delete($residence->featured_image);
           $data['featured_image'] = $request->file('featured_image')->store(Residence::IMAGE_PATH);
        }

        if ($request->hasFile('image_1')) {
            if ($residence->image_1 != null) {
                Storage::delete($residence->image_1);
            }
           $data['image_1'] = $request->file('image_1')->store(Residence::IMAGE_PATH);
        }

        if ($request->hasFile('image_2')) {
            if ($residence->image_2 != null) {
                Storage::delete($residence->image_2);
            }
           $data['image_2'] = $request->file('image_2')->store(Residence::IMAGE_PATH);
        }

        if ($request->hasFile('video')) {
            if ($residence->video != null) {
                Storage::delete($residence->video);
            }
            $data['video'] = $request->file('video')->store(Residence::VIDEO_PATH);
        }


        $residence->update($data);
    }

    public function handleDestroy($residence)
    {

        Storage::delete($residence->featured_image);
        if ($residence->image_1 != null) {
            Storage::delete($residence->image_1);
        }
        if ($residence->image_2 != null) {
            Storage::delete($residence->image_2);
        }
        if ($residence->video != null) {
            Storage::delete($residence->video);
        }
        $residence->delete();
    }
}
