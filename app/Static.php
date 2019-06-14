<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Static extends Model
{
    protected $fillable = ['about_image','about_content','vision', 'mission','message', 'goals','footer','news',
                           'contact', 'clients'];

    public function get($value)
    {
        $data = DB::table('statics')
            ->select($value)
            ->first();

    if($data)
        return $data->$value;
    return '';
    }
}
