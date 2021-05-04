<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    //
    protected $fillable = ['code','name','alamat','telepon','phone','joindate','email','npwp','ktp','type','unactivedate'];
    

}

