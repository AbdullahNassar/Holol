<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use App\Categorie;
use DB;
use Alert;

class PortfoliosController extends Controller
{
    public function getIndex() {
    	$portfolios = Portfolio::all();
        return view('admin.pages.portfolio.index', compact('portfolios'));
    }

    public function getAdd() {
        $categories = Categorie::all();
        $portfolios = DB::table('portfolios')
                ->select('portfolios.*')
                ->get();
        return view('admin.pages.portfolio.add', compact('categories','portfolios'));
    }

    public function insert(Request $request) {
        $v = validator($request->all() ,[
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'image2' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'name_en' => 'required',
            'name_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'url' => 'required',
            'cat_id' => 'required',
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
            'url.required' => 'من فضلك أدخل رابط المشروع',
            'cat_id.required' => 'من فضلك اختر فئة المشروع',
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
        $url = $request->input('url');
        $cat_id = $request->input('cat_id');
        $active = $request->input('active');
        $data = array('image' => $image ,'icon' => $icon ,'name_ar' => $name_ar ,'name_en' => $name_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'url' => $url,'cat_id' => $cat_id,'active' => $active);
        $R = Portfolio::create($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم اضافة البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
        
    }

    public function getEdit($id) {
        if (isset($id)) {
            $portfolios = DB::table('portfolios')
                ->join('categories','categories.id','=','portfolios.cat_id')
                ->select('portfolios.*','categories.cat_name_ar')
                ->where('portfolios.id','=', $id)
                ->get();
            $categories = Categorie::all();
            $images = DB::table('pimages')
                ->select('pimages.*')
                ->where('p_id','=', $id)
                ->get();
            return view('admin.pages.portfolio.edit', compact('portfolios','categories','images'));
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
        $url = $request->input('url');
        $cat_id = $request->input('cat_id');
        $active = $request->input('active');
        $data = array('image' => $image ,'icon' => $icon ,'name_ar' => $name_ar ,'name_en' => $name_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'url' => $url,'cat_id' => $cat_id,'active' => $active);
        $R = DB::table('portfolios')->where('id','=', $id)->update($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

    public function delete($id) {
        if (isset($id)) {
            DB::table('portfolios')->where('id','=', $id)->delete();
            return back();
        }
    }
    
    public function getPostImages(Request $request) {
        $id = $request->input('portfolio');
        $image = $request->file('file');
        if ($image) {
            $destination = storage_path('uploads/portfolios/');
            if (is_file($destination . "/{$image}")) {
                @unlink($destination . "/{$image}");
            }
            $imageName = $image->getClientOriginalName();
            $image->move($destination, $imageName);
            $image_path = "storage/uploads/portfolios".'/'.$imageName;
            $data = array('pimage'=>$image_path,'p_id'=>$id);
            DB::table('pimages')->insert($data);
        }
    }

    public function addImages(Request $request) {
        $id = $request->input('p_id');
        $image = $request->file('file');
        if ($image) {
            $destination = storage_path('uploads/portfolios/');
            $imageName = $image->getClientOriginalName();
            $image->move($destination, $imageName);
            $image_path = "storage/uploads/portfolios".'/'.$imageName;
            $data = array('pimage'=>$image_path,'p_id'=>$id);
            DB::table('pimages')->insert($data);
        }
    }

    public function deleteImage(Request $request,$id)
    {
        $image = DB::table('pimages')
                ->select('pimages.pimage')
                ->where('id','=', $id)
                ->get();
        $p_id = $request->input('p_id');
        if (isset($id)) {
            $destination = storage_path('uploads/portfolio'.$p_id.'/');
            if (is_file($destination . "/{$image}")) {
                @unlink($destination . "/{$image}");
            }
            DB::table('pimages')->where('id','=', $id)->delete();
            return back();
        }
    }

}
