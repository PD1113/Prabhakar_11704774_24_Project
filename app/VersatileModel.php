<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VersatileModel extends Model
{
    public $timestamps=false;
    protected $table='courses';
}

class VersatileStudent extends Model
{
    public $timestamps=false;
    protected $fillable=['std_name','std_email','std_phone','std_password'];
    protected $table='students';
}
