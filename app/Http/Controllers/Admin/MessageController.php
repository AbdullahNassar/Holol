<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SEMail;
use App\Message;
use DB;

class MessageController extends Controller {
	
    public function getIndex() {
        $objects = Message::all();
        return view('admin.pages.message', compact('objects'));
    }
    
    public function getEmail($id)
    {
        $subscribers = DB::table('messages')
            ->select('messages.*')
            ->where('id' , '=' , $id)
            ->get();
        return view('admin.pages.email', compact('subscribers'));
    }
    
    public function details($id)
    {
        $subscribers = DB::table('messages')
            ->select('messages.*')
            ->where('id' , '=' , $id)
            ->get();
        return view('admin.pages.details', compact('subscribers'));
    }

    public function getAll()
    {
        $subscribers = DB::table('messages')
            ->select('messages.email')
            ->get();
        return view('admin.pages.all', compact('subscribers'));
    }

    public function sendEmail(Request $request)
    {
        $v = validator($request->all() ,[
            'email' => 'required|email',
            'content' => 'required',
        ] ,[
            'email.required' => 'من فضلك أدخل البريد الالكترونى',
            'content.required' => 'من فضلك أدخل الرسالة',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $email = $request->input('email');
        $subject = $request->input('content');

        $s = Mail::to($email)->send(new SEMail($subject));
            return ['status' => 'succes' ,'data' => 'تم ارسال البريد الالكترونى'];
    }

}
