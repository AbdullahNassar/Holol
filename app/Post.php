<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title_ar','title_en','head_ar','head_en','content_ar','content_en','day_ar','day_en','month_ar','month_en','year_ar','year_en','icon','image','cat_id','active'];
}
