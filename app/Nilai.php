<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
     //Proses bagian ke database
     protected $table = "nilais";
     // protected $primarykey = "id";
     protected $fillable = [
         'id_alternatif','id_kriteria','nilai',
     ];
 
     protected $hidden = [
         'password','remember_token',
     ];
 
     public function alternatif()
     {
         return $this->BelongsTo('Alternatif::class');
     }
}
