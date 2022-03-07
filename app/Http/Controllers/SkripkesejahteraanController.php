<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skrip;
use Illuminate\Support\Facades\DB;
use App\Kriteria;
class SkripkesejahteraanController extends Controller
{

    Private function _Validation(Request $request)
    {
        $validation = $request->validate(
            [
                'id_kriteria' => 'required',
                'kd_skrips' => 'required',
                'nm_skrips' => 'required',
                'nilai' => 'required',
            ],
            [
                'id_kriteria.required' => 'data harus di isi',
                'kd_skrips.required' => 'data harus di isi',
                'nm_skrips.required' => 'data harus di isi',
                'nilai.required' => 'data harus di isi',
            ]
        
        );

    }

    public function viewDataKriteria()
    {
        $kriteriaKesejahteraan = Kriteria::all();
        // $kriteriaKesejahteraan = DB::table('skrips')->get();
        // dd($kriteriaKesejahteraan);
        return view('user.kesejahteraan.input-skripkesejahteraan',['kriteriaKesejahteraan' => $kriteriaKesejahteraan]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('user.kesejahteraan.skripkesejahteraan');
    // }

    // public function addSkripkesejahteraan()
    // {
    //     return view('user.kesejahteraan.input-skripkesejahteraan');
    // }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Proses menginput data 
        $this->_Validation($request);
        $input_data = array (
            'id_kriteria' => $request->id_kriteria,
            'kd_skrips' => $request->kd_skrips,
            'nm_skrips' => $request->nm_skrips,
            'nilai' => $request->nilai,
        );

        Skrip::create($input_data);
        // dd($input_data);
        return redirect('skripkesejahteraan')->with('message','Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Skrip $skrips)
    {
        $skrips = DB::table('kriterias')
        ->join('skrips','kriterias.id', '=','skrips.kriteria_id')
        ->select('skrips.kd_skrips','kriterias.nm_kriteria','skrips.nm_skrips','skrips.nilai')
        ->get();

        return view('user.kesejahteraan.skripkesejahteraan')->with('skrips', $skrips);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
