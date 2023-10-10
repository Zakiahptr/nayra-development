<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;


class ServiceServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        $service_icon = $request->file('service_icon')->store(Service::IMAGE_PATH);
        $data['service_icon'] = $service_icon;


        Service::create($data);
    }
    public function handleUpdate($request, $service)
    {
        $data = $request->validated();

        if ($request->hasFile('service_icon')) {
           Storage::delete($service->service_icon);
           $data['service_icon'] = $request->file('service_icon')->store(Service::IMAGE_PATH);
        }



        $service->update($data);
    }

    public function handleDestroy($service)
    {
        Storage::delete($service->service_icon);
        $service->delete();
    }
}
