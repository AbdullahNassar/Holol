<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DataController extends Controller {

    public function getData()
    {
        $statics = DB::table('statics')->select('statics.*')->where('id','=', 1)->get();
        return view('admin.pages.data', compact('statics'));
    }


    public function updateData(Request $request)
    {

        $image = $request->input('image');
        $about_head_ar = $request->input('about_head_ar');
        $about_head_en = $request->input('about_head_en');
        $about_content_ar = $request->input('about_content_ar');
        $about_content_en = $request->input('about_content_en');
        $slider_ar = $request->input('slider_ar');
        $slider_en = $request->input('slider_en');
        $slider2_ar = $request->input('slider2_ar');
        $slider2_en = $request->input('slider2_en');
        $morals_ar = $request->input('morals_ar');
        $morals_en = $request->input('morals_en');
        $vision_ar = $request->input('vision_ar');
        $vision_en = $request->input('vision_en');
        $goals_ar = $request->input('goals_ar');
        $goals_en = $request->input('goals_en');
        $message_ar = $request->input('message_ar');
        $message_en = $request->input('message_en');
        $contact_ar = $request->input('contact_ar');
        $contact_en = $request->input('contact_en');

        $data = array('about_image' => $image ,'about_head_ar' => $about_head_ar
                         ,'about_head_en' => $about_head_en,'about_content_ar' => $about_content_ar
                         ,'about_content_en' => $about_content_en,'slider_ar' => $slider_ar
                         ,'slider_en' => $slider_en,'slider2_ar' => $slider2_ar
                         ,'slider2_en' => $slider2_en,'morals_ar' => $morals_ar
                         ,'morals_en' => $morals_en,'vision_ar' => $vision_ar
                         ,'vision_en' => $vision_en, 'goals_ar' => $goals_ar
                         ,'goals_en' => $goals_en, 'message_ar' => $message_ar
                         ,'message_en' => $message_en,'contact_ar' => $contact_ar
                         ,'contact_en' => $contact_en);
        
        $d = DB::table('statics')->where('id', 1)->update($data);
        
            if ($d){
                return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
            }else{
                return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
            }
    }
}
