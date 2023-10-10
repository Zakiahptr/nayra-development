<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Services\ServiceServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request, ServiceServices $serviceServices)
    {
        $serviceServices->handleStore($request);

        return redirect()->route('admin.service.index')->with('status', 'Data keunggulan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Service $service)
    // {
    //     return view('admin.service.detail', compact('service'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Service $service, ServiceRequest $request, ServiceServices $serviceServices)
    {
        $serviceServices->handleUpdate($request, $service);

        return redirect()->route('admin.service.index')->with('status', 'Data Keunggulan Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service, ServiceServices $serviceServices)
    {
        $serviceServices->handleDestroy($service);

        return redirect()->route('admin.service.index')->with('status', 'Data Keunggulan Berhasil Dihapus!');
    }
}
