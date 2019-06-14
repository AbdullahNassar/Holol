<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactsController extends Controller {

	public function getContacts()
    {
        $contacts = DB::table('contacts')->select('contacts.*')->where('id','=', 1)->get();
        return view('admin.pages.contact', compact('contacts'));
    }


    public function updateContacts(Request $request)
    {
        $v = validator($request->all() ,[
            'address_ar' => 'required',
            'address_en' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ] ,[
            'address_ar.required' => 'من فضلك أدخل العنوان باللغة العربية',
            'address_en.required' => 'من فضلك أدخل العنوان باللغة الانجليزية',
            'email.required' => 'من فضلك أدخل البريد الالكترونى',
            'phone.required' => 'من فضلك أدخل رقم الهاتف'
        ]);

        if ($v->fails()){
            return ['status' => false , 'data' => implode(PHP_EOL ,$v->errors()->all())];
        }
        $phone = $request->input('phone');
        $email = $request->input('email');
        $address_ar = $request->input('address_ar');
        $address_en = $request->input('address_en');

        $data = array('phone' => $phone ,'email' => $email ,
         'address_ar' => $address_ar ,'address_en' => $address_en);
        $d = DB::table('contacts')->where('id', 1)->update($data);

        if ($d){
            return ['status' => 'succes' ,'data' => 'تم تحديث البيانات بنجاح'];
        }else{
            return ['status' => false ,'data' => 'حدث خطأ , من فضلك حاول مرة أخرى'];
        }
    }
}
