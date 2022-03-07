<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\Nilai;
use App\Kriteria;
use DB;
class NilaiController extends Controller
{
    public function nilaiAlternatifKesejahteraan()
    {
        // $nilai = DB::table('nilais')
        // ->join('alternatifs','nilais.alternatif_id', '=','alternatifs.id')
        // // ->join('kriterias','nilais.kriteria_id', '=','kriterias.id')
        // ->select('alternatifs.nm_alternatif','nilais.nilai')
      
        // ->get();
        $nilai = Nilai::all();
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();

        return view('user.kesejahteraan.nilaialternatifkesejahteraan',compact('kriteria' , 'nilai','alternatif'));
    }


    public function addNilai()
    {
        return view('user.kesejahteraan.input-nilaialternatifkesejahteraan');
    }
}
