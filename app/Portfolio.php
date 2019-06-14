<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['icon','image','name_ar','name_en','content_ar','content_en','url','cat_id','active'];
}
