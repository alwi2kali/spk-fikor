<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Kriteria;
use App\Alternatif;
// use DB;
class AlternatifkesejahteraanController extends Controller
{

    //Validation Field
    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'nik' => 'required',
                'nm_alternatif' => 'required',
                'alamat' => 'required',
                

            ],
            [
                'nik.required' => 'Gunakan angka',
                'nm_alternatif.required' => 'Tidak boleh kosong',
                'alamat.required' => 'Tidak boleh kosong',
               
            ]
        );
    }

    // public function skrip()
    // {
       
    // }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('user.kesejahteraan.alternatifkesejahteraan');
      

    }

    public function addAlternatifkesejahteraan()
    {
        // $skrip = Skrip::all();
        // $kriteria = Kriteria::all();

        return view('user.kesejahteraan.input-alternatifkesejahteraan');
    }

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
        //Prosen Simpan Data Kedalam Database
        $this->_validation($request);
        $input_data = array (
            'nik' => $request->nik,
            'nm_alternatif' => $request->nm_alternatif,
            'alamat' => $request->alamat,
          
        
        );

        Alternatif::create($input_data);
        return redirect('alternatifkesejahteraan')->with('message','Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        $alternatif = Alternatif::all();
        return view('user.kesejahteraan.alternatifkesejahteraan')->with('alternatif', $alternatif);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif, $id)
    {
        $alternatif = Alternatif::find($id);
        return view('user.kesejahteraan.edit-alternatifkesejahteraan', compact('alternatif'));
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
       
           $input_data = array (
                'nik' => $request->nik,
                'nm_alternatif' => $request->nm_alternatif,
                'alamat' => $request->alamat,
    
           );
    
        //    Kriteria::whereId_kriteria($id_kriteria)->update($input_data);
           Alternatif::whereId($id)->update($input_data);
           return redirect('alternatifkesejahteraan')->with('message','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        return redirect('alternatifkesejahteraan')->with('message','Data berhasil di hapus');
    }
}
