<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data;
use App\Mark;
use App\Subscriber;
use App\Categorie;
use App\Contact;
use App\Sub;
use App\Product;
use DB;

class ProductsController extends Controller {

    public function getIndex() {

        $subs = Sub::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $products = DB::table('products')
                ->join('subs','products.s_id','=','subs.sub_id')
                ->select('products.*','subs.sub_name')
                ->where('products.active','=', 1)
                ->get();

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.products', compact('contact','data','subs','categories','marks','products'));
    }

    public function getCat($id){

        $subs = Sub::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $products = $products = DB::table('products')
                ->join('categories','products.cat_id','=','categories.cat_id')
                ->join('subs','products.cat_id','=','subs.sub_id')
                ->select('products.*','categories.cat_name','subs.sub_name')
                ->where('products.cat_id','=', $id)
                ->where('products.active','=', 1)
                ->get();

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.products', compact('contact','data','subs','categories','marks','products'));
    }

    public function getSub($id){

        $subs = Sub::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $products = DB::table('products')
                ->join('subs','products.s_id','=','subs.sub_id')
                ->select('products.*','subs.sub_name')
                ->where('products.s_id','=', $id)
                ->where('products.active','=', 1)
                ->get();

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.subs', compact('contact','data','subs','categories','marks','products'));
    }

    public function getProduct($id){

        if (isset($id)) {

            $subs = Sub::all()->where('active','=', 1);
            $categories = Categorie::all()->where('active','=', 1);
            $marks = Mark::all()->where('active','=', 1);
            $product = Product::all()->where('p_id','=', $id)->where('active','=', 1);

            $contact = new Contact;
            $data = new Data;

            return view('site.pages.product', compact('contact','data','subs','categories','marks','product'));
        }
    }

}
