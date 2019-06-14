<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\notify_me;
use Auth;
use App\Data;
use App\Mark;
use App\Subscriber;
use App\Categorie;
use App\Contact;
use App\Team;
use App\Client;
use DB;

class ContactController extends Controller {

    public function getIndex() {

        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.contact', compact('contact','data','categories','marks'));
    }

    public function message(Request $request)
    {
        $v = validator($request->all() ,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ] ,[
            'name.required' => 'من فضلك أدخل الاسم كامل',
            'email.required' => 'من فضلك ادخل البريد الالكترونى',
            'phone.required' => 'من فضلك ادخل الهاتف',
            'subject.required' => 'من فضلك ادخل الموضوع',
            'message.required' => 'من فضلك ادخل الرسالة',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $data = array('name'=>$name,'email'=>$email,'phone'=>$phone, 'subject'=>$subject, 'message'=>$message);

        $m = DB::table('messages')->insert($data);
        
        if ($m){
            if (Auth::guard('admins')->check()){
                    Auth::guard('admins')->user()->notify(new notify_me());
                }
            return ['status' => 'succes' ,'data' => 'تم ارسال الرسالة بنجاح'];
        }
        return ['status' => 'error' ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
    }

}
