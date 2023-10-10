<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inboxes = Inbox::all();
        return view('admin.inbox.index', compact('inboxes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Inbox $inbox)
    {
        $replyMessage = 'Hallo ka '.$inbox->sender_name.', Terimakasih sudah menghubungi kami melalui website kami. berikut detail pesan yang kaka kirimkan:';
        return view('admin.inbox.detail', compact('inbox', 'replyMessage'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inbox $inbox)
    {
        $inbox->delete();

        return redirect()->route('admin.inbox.index')->with('status', 'Pesan Berhasil Dihapus!');
    }
}
