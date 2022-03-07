<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = "alternatifs";
    protected $primarykey = "id_alternatif";
    protected $fillable = [
        'nik','nm_alternatif','alamat','umur','lantai','dinding','atap','status_tinggal',
      ];
  
      protected $hidden = [
          'password','remember_token',
      ];

      public function nilai()
      {
          return $this->hasMany(Nilai::class);
      }

}
