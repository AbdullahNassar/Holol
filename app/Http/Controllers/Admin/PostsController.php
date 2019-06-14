<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Cat;
use DB;

class PostsController extends Controller
{
    public function getIndex() {
        $posts = post::all();
        return view('admin.pages.post.index', compact('posts'));
    }

    public function getAdd() {
        $categories = Cat::all();
        return view('admin.pages.post.add', compact('categories'));
    }

    public function insert(Request $request) {
        $v = validator($request->all() ,[
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'image2' => 'required|image|mimes:jpeg,jpg,png,gif|max:20000',
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',

            'active' => 'required',
            'cat_id' => 'required',
        ] ,[
            'image.required' => 'من فضلك قم بتحميل الصورة',
            'image.image' => 'يرجى تحميل صورة وليس فيديو',
            'image.mimes' => 'نوع الصورة : jpeg,jpg,png,gif',
            'image.max' => 'الحد الاقصى لحجم الصورة : 20 MB',
            'cat_id.required' => 'من فضلك اختر فئة',
            'image2.required' => 'من فضلك قم بتحميل الصورة',
            'image2.image' => 'يرجى تحميل صورة وليس فيديو',
            'image2.mimes' => 'نوع الصورة : jpeg,jpg,png,gif',
            'image2.max' => 'الحد الاقصى لحجم الصورة : 20 MB',

            'title_ar.required' => 'من فضلك أدخل عنوان الخدمة باللغة العربية',
            'title_en.required' => 'من فضلك أدخل عنوان الخدمة باللغة الانجليزية',
            'content_ar.required' => 'من فضلك أدخل محتوى الخدمة باللغة العربية',
            'content_en.required' => 'من فضلك أدخل محتوى الخدمة باللغة الانجليزية',

            'active.required' => 'من فضلك اختر حالة التفعيل',
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }

        $title_ar = $request->input('title_ar');
        $title_en = $request->input('title_en');
        $content_ar = $request->input('content_ar');
        $content_en = $request->input('content_en');
        $cat_id = $request->input('cat_id');

        $image = $request->input('image');
        $icon = $request->input('image2');
        $active = $request->input('active');

        $data = array('title_ar' => $title_ar ,'title_en' => $title_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'image' => $image,'icon' => $icon,'cat_id' => $cat_id,'active' => $active);
        $R = Post::create($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم اضافة البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
        
    }

    public function getEdit($id) {
        if (isset($id)) {
            $posts = DB::table('posts')
                ->join('cats','cats.id','=','posts.cat_id')
                ->select('posts.*','cats.cat_name_ar')
                ->where('posts.id','=', $id)
                ->get();
            $categories = Cat::all();
            return view('admin.pages.post.edit', compact('posts','categories'));
        }        
    }

    public function postEdit(Request $request) {
        
        $id = $request->input('s_id');
        $title_ar = $request->input('title_ar');
        $title_en = $request->input('title_en');
        $content_ar = $request->input('content_ar');
        $content_en = $request->input('content_en');
        $cat_id = $request->input('cat_id');
        $image = $request->input('image');
        $icon = $request->input('image2');
        $active = $request->input('active');

        $data = array('icon' => $icon,'image' => $image,'title_ar' => $title_ar ,'title_en' => $title_en ,'content_ar' => $content_ar ,'content_en' => $content_en ,'cat_id' => $cat_id,'active' => $active);
        $R = DB::table('posts')->where('id','=', $id)->update($data);
        if ($R){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }

    public function delete($id) {
        if (isset($id)) {
            DB::table('posts')->where('id','=', $id)->delete();
            return back();
        }
    }

}
