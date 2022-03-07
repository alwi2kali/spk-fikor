<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected $table ="komponens";
    protected $primaryKey = "id";
    protected $fillable = [
       'image',
     ];
 
     protected $hidden = [
         'password','remember_token',
     ];
}
