<?php

namespace App\Http\Controllers\Admin;

use App\Models\Residence;
use Illuminate\Http\Request;
use App\Services\ResidenceServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResidenceRequest;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residences = Residence::all();
        return view('admin.residence.index', compact('residences'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.residence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResidenceRequest $request, ResidenceServices $residenceServices)
    {
        $residenceServices->handleStore($request);

        return redirect()->route('admin.residence.index')->with('status', 'Data Perumahan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Residence $residence)
    {
        return view('admin.residence.detail', compact('residence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Residence $residence)
    {
        return view('admin.residence.edit', compact('residence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Residence $residence, ResidenceRequest $request, ResidenceServices $residenceServices )
    {
        $residenceServices->handleUpdate($request, $residence);

        return redirect()->route('admin.residence.index')->with('status', 'Data Perumahan Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Residence $residence, ResidenceServices $residenceServices )
    {
        $residenceServices->handleDestroy($residence);

        return redirect()->route('admin.residence.index')->with('status', 'Data Perumahan Berhasil Dihapus!');
    }
}
