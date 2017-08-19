<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessageController extends Controller
{
	public function sendMessage(Request $request) {
		$content = $request->input('message');
		$nickname = $request->input('nickname');

		// Save data to the message
		$msg = new Message();
		$msg->content = $content;
		$msg->sender = $nickname;

		$msg->save();

		return ok("Message sent!");
	}

    public function fetchMessages() {
    	$messages = Message::all();

    	return $messages;
    }

    public function deleteMessage(Request $request) {
    	$id = $request->input('id');

    	$msg = Message::find($id);

    	$msg->delete();

    	return ok("Message deleted!");
    }
}
