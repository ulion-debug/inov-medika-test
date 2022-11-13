<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Aktivitas;
use App\Models\Tindakan;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pasien = Pasien::where('nama_lengkap','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_pasien = Pasien::all();
        }

        $data_tindakan = Tindakan::all();
        return view('pasien.index',compact('data_pasien','data_tindakan'));
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_lengkap' => 'required|min:5|max:35',
            'nik'        => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        Pasien::create($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Pasien',
        ]);   
        return redirect('/pasien')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        
        $pasien = Pasien::find($id);
        return view('pasien/edit', ['pasien' =>$pasien]);
    }

    public function update(Request $request,$id)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Pasien',
        ]);   
        return redirect('/pasien')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Pasien',
        ]);   
        return redirect('/pasien')->with('sukses','Data berhasil dihapus');
    }
    public function profile($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.profile', ['pasien' =>$pasien]);
    }

    public function GetPasien(){
        $pasien = Pasien::all();

        return response()->json($pasien);
    }
}
