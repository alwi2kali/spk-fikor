<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriterias";
    // protected $primarykey = "id";
    protected $fillable = [
        'kd_kriteria','nm_kriteria','bobot',
    ];

    protected $hidden = [
        'password','remember_token',
    ];


    public function skrip()
    {
        return $this->hasMany(Skrip::class);
    }


}
