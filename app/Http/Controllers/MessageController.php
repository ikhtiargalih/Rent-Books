<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;

class MessageController extends Controller
{

    public function storeMessage(Request $request)
    {
    // dd($request->all());
    $request->validate([
        'email' => 'required',
        'message' => 'required'
    ]);

    Message::create([
        'email' => $request->email,
        'message' => $request->message,
    ]);
    return redirect('/');
    }

}
