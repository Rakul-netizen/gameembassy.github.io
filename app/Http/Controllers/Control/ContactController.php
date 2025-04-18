<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\UserContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactcontrol()
    {
        return view('contact',[
            'heading' => "contact us",
            'send' => "send",
            'contactheading' => "Contact Information",
            'contactpara' => "We'r open for any suggestion or just to have a chat",
            'email' => "Email:",
            'instagram' => "Instagram:",
            'facebook' => "Facebook:",
            'telegram' => "Telegram:",
        ]);
    }

    public function send(Request $request){
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneno' => 'required|string|max:10',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        UserContact::create([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phoneno'=>$request->phoneno,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return back()->withSuccess('you have been successfully send!');
    }

    public function usermessage(){
        $ucards = UserContact::all();
        return view('admin.messageview',['ucards'=>$ucards]);
    }

    public function contact(){
        return view('contact');
    }
}
