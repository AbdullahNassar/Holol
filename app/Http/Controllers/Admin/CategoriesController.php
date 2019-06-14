<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorie;
use DB;

class CategoriesController extends Controller {


    public function getIndex() {
        $categories = Categorie::all();
        return view('admin.pages.categories.add', compact('categories'));
    }

    public function getCategory($id)
    {
        if (isset($id)) {
            $categories = DB::table('categories')->select('categories.*')->where('id','=', $id)->get();
            $cats = Categorie::all();
        return view('admin.pages.categories.edit', compact('categories','cats'));
        }
    }

    public function delete($id)
    {
        if (isset($id)) {
            DB::table('categories')->where('id','=', $id)->delete();
            return back();
        }
    }

    public function insert(Request $request)
    {
        $v = validator($request->all() ,[
            'cat_name_ar' => 'required',
            'cat_name_en' => 'required',
            'active' => 'required',
        ] ,[
            'cat_name_ar.required' => 'من فضلك أدخل اسم الفئة باللغة العربية',
            'cat_name_en.required' => 'من فضلك أدخل اسم الفئة باللغة الانجليزية',
            'active.required' => 'من فضلك اختر حالة التفعيل',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $active = $request->input('active');
        $cat_name_ar = $request->input('cat_name_ar');
        $cat_name_en = $request->input('cat_name_en');
        $value = "value";
        $data = array('cat_name_ar'=>$cat_name_ar,'cat_name_en'=>$cat_name_en,'value'=>$value,'active'=>$active);

        $c = DB::table('categories')->insert($data);
        
        if ($c){
            return ['status' => 'succes' ,'data' => 'تم اضافة البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

    public function updateCategory(Request $request)
    {
        $v = validator($request->all() ,[
            'cat_name_ar' => 'required',
            'cat_name_en' => 'required',
            'active' => 'required',
        ] ,[
            'cat_name_ar.required' => 'من فضلك أدخل اسم الفئة باللغة العربية',
            'cat_name_en.required' => 'من فضلك أدخل اسم الفئة باللغة الانجليزية',
            'active.required' => 'من فضلك اختر حالة التفعيل',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $id = $request->input('s_id');
        $active = $request->input('active');
        $cat_name_ar = $request->input('cat_name_ar');
        $cat_name_en = $request->input('cat_name_en');
        $value = "value";
        $data = array('cat_name_ar'=>$cat_name_ar,'cat_name_en'=>$cat_name_en,'value'=>$value,'active'=>$active);
        $c = DB::table('categories')->where('id','=', $id)->update($data);

        if ($c){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

}
