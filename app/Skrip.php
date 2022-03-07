<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skrip extends Model
{
    //Proses bagian ke database
    protected $table = "skrips";
    // protected $primarykey = "id";
    protected $fillable = [
        'id_kriteria','kd_skrips','nm_skrips','nilai',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public function kriteria()
    {
        return $this->BelongsTo('Kriteria::class');
    }
}
