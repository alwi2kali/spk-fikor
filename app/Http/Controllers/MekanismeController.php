<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mekanisme;

class MekanismeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('master.mastermekanisme');
    // }

    public function addMekanisme()
    {
        return view('master.masteraddmekanisme');
    }


    public function _Validation(Request $request)
    {
        $validation = $request->validate(
            
            [
                'image' => 'required',
            ],
            [
                'image.required' => 'File kosong',
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->_Validation($request);
       $file = $request->file('image');

       //Upload Original Image
       $profileImage = rand() . '.' . $file->getClientOriginalExtension();
       $file->move(public_path('assets/image'), $profileImage);

       $input_data = array (
           'image' => $profileImage,
       );
       Mekanisme::create($input_data);
       return redirect('mastermekanisme')->with('message','Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mekanisme $mekanisme)
    {
        $mekanisme = Mekanisme::all();
        return view('master.mastermekanisme', compact('mekanisme'));
    }

    public function showuser(Mekanisme $mekanisme)
    {
        $mekanisme = Mekanisme::all();
        return view('user.usermekanisme', compact('mekanisme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mekanisme $mekanisme, $id)
    {
        $mekanisme = Mekanisme::findorfail($id);
        return view('master.mastereditmekanisme', compact('mekanisme'));
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
        $this->_Validation($request);
        $files = $request->file('image');

        //Upload Original Image
        $profileImage = rand() . '.' . $files->getClientOriginalExtension();
        $files->move(public_path('assets/image'), $profileImage);

        $input_data = array(
            'image' => $profileImage,
        );

        Mekanisme::whereId($id)->update($input_data);
        return redirect('mastermekanisme')->with('message','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mekanisme $mekanisme, $id)
    {
        $mekanisme = Mekanisme::find($id);
        $mekanisme->delete();
        return redirect('mastermekanisme');
    }
}
