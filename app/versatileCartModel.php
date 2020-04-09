<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class versatileCartModel extends Model
{
    public $timestamps=false;
    protected $fillable=['cart_course_code','cart_course_name','cart_course_title','std_id','std_email','std_phone'];
    protected $table='stdcart';
}
