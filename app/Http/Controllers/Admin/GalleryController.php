<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Services\GalleryServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request, GalleryServices $galleryServices)
    {
        $galleryServices->handleStore($request);

        return redirect()->route('admin.gallery.index')->with('status', 'Gambar Berhasil Ditambahkan!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery, GalleryServices $galleryServices)
    {
        $galleryServices->handleDestroy($gallery);

        return redirect()->route('admin.gallery.index')->with('status', 'Gambar Berhasil Dihapus!');
    }
}
