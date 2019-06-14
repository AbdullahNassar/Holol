<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data;
use App\Mark;
use App\Subscriber;
use App\Categorie;
use App\Contact;
use App\Team;
use App\Client;

class MarksController extends Controller {

    public function getIndex() {

        $teams = Team::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $clients = Client::all()->where('active','=', 1);

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.marks', compact('contact','teams','data','clients','categories','marks'));
    }

    public function getPost($id) {

        if (isset($id)) {

        $teams = Team::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $mark = Mark::all()->where('id','=', $id);
        $clients = Client::all()->where('active','=', 1);

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.mark', compact('contact','teams','data','clients','categories','marks','mark'));
        }
    }

}
