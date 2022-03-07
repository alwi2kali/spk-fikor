<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mekanisme extends Model
{
    protected $table ="mekanismes";
    protected $primaryKey = "id";
    protected $fillable = [
       'image',
     ];
 
     protected $hidden = [
         'password','remember_token',
     ];
}
