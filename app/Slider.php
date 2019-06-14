<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\language;
use DB;

class Slider extends Model
{
    protected $fillable = ['image','active'];
}
