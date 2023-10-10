<?php

namespace App\Http\Controllers\Guest;

use App\Models\Inbox;
use Illuminate\Http\Request;
use App\Http\Requests\InboxRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact-us');
    }

    public function store(InboxRequest $request)
    {
        $data = $request->validated();
        Inbox::create($data);

        return back()->with('status', 'Pesan Berhasil Terkirim!');
    }
}
