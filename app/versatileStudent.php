<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class versatileStudent extends Model
{
    public $timestamps=false;
    protected $fillable=['std_name','std_email','std_phone','std_password'];
    protected $table='students';
}
