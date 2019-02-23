<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
        ]);
        $msg = new Message;
        $msg->name = $request->input('name');
        $msg->email = $request->input('email');
        $msg->message = $request->input('message');
        $msg->save();

        return redirect('/')->with('status', 'message sent');
    }
    public function getMessages(){
        $msg = Message::all();

        return view('allmessages')->with('messages', $msg);
    }
}
