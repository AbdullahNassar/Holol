<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\language;
use DB;

class Contact extends Model
{
    public function get($value)
    {
        $contact = DB::table('contacts')
            ->select($value)
            ->first();

    if($contact)
        return $contact->$value;
    return '';
    }
}
