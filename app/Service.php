<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['icon','image','name_ar','name_en','content_ar','content_en','active'];
}
