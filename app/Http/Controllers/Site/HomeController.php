<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\notify_me;
use Auth;
use App\Data;
use App\Categorie;
use App\Portfolio;
use App\Service;
use App\Slider;
use App\Contact;
use App\Post;
use DB;

class HomeController extends Controller {

    public function getIndex() {

        $services = Service::all()->where('active','=', 1);
        $sliders = Slider::all()->where('active','=', 1);
        $posts = Post::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $portfolios = DB::table('portfolios')
                ->join('categories','categories.id','=','portfolios.cat_id')
                ->select('portfolios.*','categories.value')
                ->get();
                
        $images = DB::table('pimages')->select('pimages.*')->get();

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.home', compact('contact','data','services','sliders','posts','categories','portfolios','images'));
    }

    public function message(Request $request)
    {
        if (app()->getLocale() == 'ar'){
            $v = validator($request->all() ,[
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ] ,[
                'name.required' => 'من فضلك أدخل الاسم كامل',
                'email.required' => 'من فضلك ادخل البريد الالكترونى',
                'subject.required' => 'من فضلك ادخل الموضوع',
                'message.required' => 'من فضلك ادخل الرسالة',
            ]);
        }else{
            $v = validator($request->all() ,[
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ] ,[
                'name.required' => 'Please Enter Your Full Name',
                'email.required' => 'Please Enter Your Email Address',
                'subject.required' => 'Please Enter Subject ',
                'message.required' => 'Please Enter Your Message',
            ]);
        }
        
        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $data = array('name'=>$name,'email'=>$email,'subject'=>$subject, 'message'=>$message);

        $m = DB::table('messages')->insert($data);
        if (Auth::guard('admins')->check()){
            Auth::guard('admins')->user()->notify(new notify_me());
        }

        if ($m){
            
            return ['status' => 'succes' ,'data' => 'تم ارسال الرسالة بنجاح'];
        }
        return ['status' => 'error' ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
    }

    public function error() {

        $sliders = Slider::all()->where('active','=', 1);

        return view('site.pages.error', compact('sliders'));
    }

}
