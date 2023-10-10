<?php

namespace App\Http\Controllers\Admin;

use App\Models\Workflow;
use Illuminate\Http\Request;
use App\Services\WorkflowService;
use App\Services\WorkflowServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkflowRequest;

class WorkflowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workflows = Workflow::all();
        return view('admin.workflow.index', compact('workflows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.workflow.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkflowRequest $request, WorkflowServices $workflowServices)
    {
        $workflowServices->handleStore($request);

        return redirect()->route('admin.workflow.index')->with('status', 'Data Alur Kerja Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workflow $workflow)
    {
        return view('admin.workflow.edit', compact('workflow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Workflow $workflow, WorkflowRequest $request, WorkflowServices $workflowServices)
    {
        $workflowServices->handleUpdate($request, $workflow);

        return redirect()->route('admin.workflow.index')->with('status', 'Data Alur Kerja Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workflow $workflow, WorkflowServices $workflowServices)
    {
        $workflowServices->handleDestroy($workflow);

        return redirect()->route('admin.workflow.index')->with('status', 'Data Alur Kerja Berhasil Dihapus!');
    }
}
