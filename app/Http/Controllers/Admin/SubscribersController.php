<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Contacts;
use App\Subscriber;
use Alert;
use DB;

class SubscribersController extends Controller {

	public function getIndex()
    {
        $subscribers = DB::table('subscribers')
            ->select('subscribers.*')
            ->get();
        return view('admin.pages.subscriber.index', compact('subscribers'));
    }

    public function getEmail($id)
    {
        $subscribers = DB::table('subscribers')
            ->select('subscribers.*')
            ->where('id' , '=' , $id)
            ->get();
        return view('admin.pages.subscriber.email', compact('subscribers'));
    }

    public function getAll()
    {
        $subscribers = DB::table('subscribers')
            ->select('subscribers.email')
            ->get();
        return view('admin.pages.subscriber.all', compact('subscribers'));
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

        $s = Mail::to($email)->send(new SendMail($subject));
        
        return ['status' => 'succes' ,'data' => 'تم ارسال البريد الالكترونى'];
    }

    public function sendAll(Request $request)
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
        $subs = DB::table('subscribers')
            ->select('subscribers.*')
            ->get();
        $count = 1;
        foreach($subs as $subscriber){
            $email = $request->input('email'.$count);
            $subject = $request->input('content');
            Mail::to($email)->send(new SendMail($subject));
            $count++;
        }
        return ['status' => 'succes' ,'data' => 'تم ارسال البريد الالكترونى'];
    }
}
