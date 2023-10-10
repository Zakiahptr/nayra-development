<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Residence;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $residences = Residence::all();
        return view('admin.type.create', compact('residences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeRequest $request)
    {
        $data = $request->validated();
        Type::create($data);

        return redirect()->route('admin.type.index')->with('status', 'Data Tipe Perumahan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.type.detail', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $residences = Residence::all();
        return view('admin.type.edit', compact('type', 'residences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Type $type, TypeRequest $request)
    {
        $data = $request->validated();
        $type->update($data);

        return redirect()->route('admin.type.index')->with('status', 'Data Tipe Perumahan Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.type.index')->with('status', 'Data Tipe Perumahan Berhasil Dihapus!');
    }
}
