<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller {
    public function getIndex() {
        $sliders = Slider::all();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function getSlider($id)
    {
        if (isset($id)) {
        $sliders = DB::table('sliders')
            ->select('sliders.*')
            ->where('id','=', $id)
            ->get();
        return view('admin.pages.slider.edit', compact('sliders'));
        }
    }

    public function deleteSlid($id)
    {
        if (isset($id)) {
            $slider = DB::table('sliders')->where('id','=', $id)->delete();
            $sliders = Slider::all();
            return view('admin.pages.slider.index', compact('sliders'));
        }
    }

    public function updateSlider(Request $request)
    {
        $id = $request->input('s_id');
        $image = $request->input('image');
        $active = $request->input('active');

        $data = array('image'=>$image,'active'=>$active);
        $slider = DB::table('sliders')->where('id','=', $id)->update($data);

        if ($slider){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

    public function getAdd() {
        return view('admin.pages.slider.add');
    }

    public function insertSlider(Request $request)
    {
        $v = validator($request->all() ,[
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'active' => 'required',
        ] ,[
            'image.required' => 'من فضلك قم بتحميل الصورة',
            'image.image' => 'يرجى تحميل صورة وليس فيديو',
            'image.mimes' => 'نوع الصورة : jpeg,jpg,png,gif',
            'image.max' => 'الحد الاقصى لحجم الصورة : 20 MB',
            'active.required' => 'من فضلك اختر حالة التفعيل',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $image = $request->input('image');
        $active = $request->input('active');

        $data = array('image'=>$image,'active'=>$active);

        $slider = DB::table('sliders')->insert($data);

        if ($slider){
            return ['status' => 'succes' ,'data' => 'تم اضافة البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

}
