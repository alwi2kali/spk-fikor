<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Komponen;
// use DB;

class KomponenController extends Controller
{

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            
          
            'image' => 'required',
    
            ],
            [
             'image.required' => 'File kosong',
            ]
        );
    }


    // public function index()
    // {
    //     return view('master.masterkomponen');
    // }

    public function addKomponen()
    {
        return view('master.masteraddkomponen');
    }

    public function store(Request $request)
    {
        $this->_validation($request);
        // $data = array();
        // $image  = $request->file('image');
        // if ($image) {
        //     $image_name = date('dmy_H_s_i');
        //     $ext = strtolower($image->getClientOriginalExtension());
        //     $image_full_name = $image_name.'.'.$ext;
        //     $upload_path = 'assets/image/';
        //     $image_url = $upload_path.$image_full_name;
        //     $success = $image->move($upload_path, $image_full_name);

        //     $data['image'] = $image_url;
        //     $komponen = DB::table('komponen')->insert($data);
        //     return redirect()->route('masterkomponen')->with('message','Data berhasil di simpan');

        // }

        
        $files = $request->file('image');

        // Upload Original Image
        $profileImage = rand() . '.' . $files->getClientOriginalExtension();
        $files->move(public_path('assets/image'),$profileImage);

       $input_data = array (
           'image' => $profileImage,

       );

       Komponen::create($input_data);
       return redirect('masterkomponen')->with('message','Data berhasil di simpan');
    }

    public function edit(Komponen $komponen,$id)
    {

        $komponen = Komponen::findorfail($id);
        //  dd($komponen);
        return view('master.mastereditkomponen', compact('komponen'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $files = $request->file('image');

        // Upload Original Image
        $profileImage = rand() . '.' . $files->getClientOriginalExtension();
        $files->move(public_path('assets/image'),$profileImage);

       $input_data = array (
           'image' => $profileImage,

       );
       Komponen::whereId($id)->update($input_data);
       return redirect('masterkomponen')->with('message','Data berhasil di update');
    }

    public function show(Komponen $komponen)
    {
        $komponen = Komponen::all();
        return view('master.masterkomponen')->with('komponen', $komponen);
    }

    public function showUser(Komponen $komponen)
    {
        $komponen = Komponen::all();
        return view('user.userkomponen')->with('komponen', $komponen);
    }

    public function destroy(Komponen $komponen, $id_kriteria)
    {
        $komponen = Komponen::find($id_kriteria);
        $komponen->delete();
        return redirect('masterkomponen')->with('message','Data berhasil di hapus');
    }
}
