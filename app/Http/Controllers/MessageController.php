<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendmessage(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'recipient_id' => 'required',
            'message_body' => 'required',
        ]);

        // Save Record into Message DB
        $message = new Message();
        $message->sender_id = $user->id;
        $message->recipient_id = $request->input('recipient_id');
        $message->message_body = $request->input('message_body');
        $message->save();

        return redirect()->back()->with(['success'=>'Message Sent Successfully']);
    }
}
