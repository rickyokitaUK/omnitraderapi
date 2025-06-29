<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function send(Request $request)
    {
        $msg = OmniUserMessage::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);

        return response()->json($msg);
    }

    public function inbox()
    {
        return OmniUserMessage::where('receiver_id', Auth::id())
            ->orderBy('sent_at', 'desc')
            ->get();
    }
}
