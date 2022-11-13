<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataObatExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; 
use App\Models\Aktivitas;
use App\Models\DataObat;

class DataObatController extends Controller
{
    public function index(Request $request) 
    {
        if($request->has('cari')){
            $data_obat = DataObat::where('nama_obat','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_obat = DataObat::all();
        }
	Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Akses menu Data Obat',
        ]);
        return view('DataObat.index',['data_obat' => $data_obat]);
    }


    
    public function create(Request $request)
    {
        DataObat::create($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Obat',
        ]);
        return redirect('/dataobat')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $obat = DataObat::find($id);
        return view('dataobat/edit', ['obat' =>$obat]);
    }
    public function update(Request $request,$id)
    {
        $obat = DataObat::find($id);
        $obat->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Obat',
        ]);
        return redirect('/dataobat')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $obat = DataObat::find($id);
        $obat->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Obat',
        ]);
        return redirect('/dataobat')->with('sukses','Data berhasil dihapus');
    }
    public function exportExcel() 
    {
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export Excel Data Obat',
        ]);
        return Excel::download(new DataObatExport, 'Data Obat.xlsx');
    }
    public function exportPdf() 
    {
        $obat = DataObat::all();
        $pdf = PDF::LoadView('export.DataObatpdf',['obat' => $obat]);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export PDF Data Obat',
        ]);
        return $pdf->download('DataObat.pdf');
    }
}
