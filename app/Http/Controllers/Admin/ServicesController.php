<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Cat;
use DB;
use Alert;

class ServicesController extends Controller
{
    public function getIndex() {
    	$services = Service::all();
        return view('admin.pages.service.index', compact('services'));
    }

    public function getAdd() {
        return view('admin.pages.service.add');
    }

    public function postAdd(Request $request) {
        $v = validator($request->all() ,[
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'image2' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'name_en' => 'required',
            'name_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'active' => 'required',
        ] ,[
            'image.required' => 'من فضلك قم بتحميل الصورة',
            'image.image' => 'يرجى تحميل صورة وليس فيديو',
            'image.mimes' => 'نوع الصورة : jpeg,jpg,png,gif',
            'image.max' => 'الحد الاقصى لحجم الصورة : 20 MB',
            
            'image2.required' => 'من فضلك قم بتحميل الصورة',
            'image2.image' => 'يرجى تحميل صورة وليس فيديو',
            'image2.mimes' => 'نوع الصورة : jpeg,jpg,png,gif',
            'image2.max' => 'الحد الاقصى لحجم الصورة : 20 MB',

            'name_ar.required' => 'من فضلك أدخل اسم الخدمة باللغة العربية',
            'name_en.required' => 'من فضلك أدخل اسم الخدمة باللغة الانجليزية',
            'content_ar.required' => 'من فضلك أدخل محتوى الخدمة باللغة العربية',
            'content_en.required' => 'من فضلك أدخل محتوى الخدمة باللغة الانجليزية',
            'active.required' => 'من فضلك اختر حالة التفعيل',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }

        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        $content_ar = $request->input('content_ar');
        $content_en = $request->input('content_en');
        $image = $request->input('image');
        $icon = $request->input('image2');
        $active = $request->input('active');
        $data = array('image' => $image ,'icon' => $icon ,'name_ar' => $name_ar ,'name_en' => $name_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'active' => $active);
        $R = Service::create($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم اضافة البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
        
    }

    public function getEdit($id) {
        if (isset($id)) {
            $services = DB::table('services')
                ->select('services.*')
                ->where('id','=', $id)
                ->get();
            return view('admin.pages.service.edit', compact('services'));
        }        
    }

    public function postEdit(Request $request) {
        
        $id = $request->input('s_id');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        $content_ar = $request->input('content_ar');
        $content_en = $request->input('content_en');
        $image = $request->input('image');
        $icon = $request->input('image2');
        $active = $request->input('active');
        $data = array('image' => $image ,'icon' => $icon ,'name_ar' => $name_ar ,'name_en' => $name_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'active' => $active);
        $R = DB::table('services')->where('id','=', $id)->update($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

    public function delete($id) {
        if (isset($id)) {
            DB::table('services')->where('id','=', $id)->delete();
            return back();
        }
    }

}
