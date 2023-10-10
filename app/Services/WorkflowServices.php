<?php

namespace App\Services;

use App\Models\Workflow;
use Illuminate\Support\Facades\Storage;


class WorkflowServices
{
    public function handleStore($request)
    {
        $data = $request->validated();
        $flow_icon = $request->file('flow_icon')->store(Workflow::IMAGE_PATH);
        $data['flow_icon'] = $flow_icon;


        Workflow::create($data);
    }
    public function handleUpdate($request, $workflow)
    {

        $data = $request->validated();

        if ($request->hasFile('flow_icon')) {
           Storage::delete($workflow->flow_icon);
           $data['flow_icon'] = $request->file('flow_icon')->store(Workflow::IMAGE_PATH);
        }



        $workflow->update($data);
    }

    public function handleDestroy($workflow)
    {

        Storage::delete($workflow->flow_icon);
        $workflow->delete();
    }
}
