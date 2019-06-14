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
use DB;

class AboutController extends Controller {

    public function getIndex() {

        $teams = Team::all()->where('active','=', 1);
        $categories = Categorie::all()->where('active','=', 1);
        $marks = Mark::all()->where('active','=', 1);
        $clients = Client::all()->where('active','=', 1);

        $contact = new Contact;
        $data = new Data;

        return view('site.pages.about', compact('contact','teams','data','clients','categories','marks'));
    }

}
