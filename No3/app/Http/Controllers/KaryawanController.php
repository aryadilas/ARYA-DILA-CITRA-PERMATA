<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function delete($id){
        Karyawan::where('id',$id)->delete();
        return back();
    }
    function addData(Request $request){
        Karyawan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenisKelamin' => $request->jenisKelamin,
            'alamat'=> $request->alamat
        ]);
        return redirect('/');
    }
    function editform($id){
        $data = Karyawan::where('id',$id)->first();
        return view('updateform', ['data' => $data]);
    }
    function update($id, Request $request){
        $data = Karyawan::where('id',$id)->first();
        $data->update(
            [
                'nama' => $request->nama,
                'umur' => $request->umur,
                'jenisKelamin' => $request->jenisKelamin,
                'alamat'=> $request->alamat
            ]
        );
        return redirect('/');
    }
}
