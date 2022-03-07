<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
// use DB;
class KriteriakesejahteraanController extends Controller
{
    private function _Validation(Request $request)
    {
        $validation = $request->validate(
            [
                'kd_kriteria' => 'required',
                'nm_kriteria' => 'required',
                'bobot' => 'required',
            ],
            [
                'kd_kriteria.required' => 'Tidak boleh kosong',
                'nm_kriteria.required' => 'Tidak boleh kosong',
                'bobot.required' => 'Input dengan angka',
            ]
            );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('user.kesejahteraan.kriteriakesejahteraan');
    }

    public function addKriteriakesejahteraan()
    {
        return view('user.kesejahteraan.input-kriteriakesejahteraan');
    }

    
    // public function nilaiKriteriaKesejahteraan()
    // {
    //     return view('user.kesejahteraan.nilai-kriteriakesejahteraan');
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
        //Prose Simpan data
        $this->_Validation($request);
        $input_data = array (
            'kd_kriteria' => $request->kd_kriteria,
            'nm_kriteria' => $request->nm_kriteria,
            'bobot' => $request->bobot,
        );

        Kriteria::create($input_data);
        return redirect('kriteriakesejahteraan')->with('message','Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Kriteria $kriteria)
    {
        $kriteria = Kriteria::all();
        return view('user.kesejahteraan.kriteriakesejahteraan')->with('kriteria', $kriteria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria, $id)
    {
        //Proses Edit
        // $kriteria = DB::table('kriterias')->where('id_kriteria',$id_kriteria)->first();
        $kriteria = Kriteria::find($id);
        // $kriteria = Kriteria::whereId_kriteria($id_kriteria)->first();
        return view('user.kesejahteraan.edit-kriteriakesejahteraan', compact('kriteria'));
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
       $this->_validation($request);
    //    DB::table('kriterias')->where('id_kriteria',$id_kriteria)->update([
    //         'kd_kriteria' => $request->kd_kriteria,
    //         'nm_kriteria' => $request->nm_kriteria,
    //         'bobot' => $request->bobot,
    // ]);
       $input_data = array (
            'kd_kriteria' => $request->kd_kriteria,
            'nm_kriteria' => $request->nm_kriteria,
            'bobot' => $request->bobot,

       );

    //    Kriteria::whereId_kriteria($id_kriteria)->update($input_data);
       Kriteria::whereId($id)->update($input_data);
       return redirect('kriteriakesejahteraan')->with('message','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Kriteria::whereId_kriteria($id_kriteria)->delete();
        $kriteria = Kriteria::find($id);
        $kriteria->delete();
        return redirect('kriteriakesejahteraan')->with('message','Data berhasil di hapus');
    }
}
