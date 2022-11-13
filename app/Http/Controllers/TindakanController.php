<?php

namespace App\Http\Controllers;
use App\Models\Tindakan;
use Illuminate\Http\Request;
use PDF;
use \App\Models\Aktivitas;

class TindakanController extends Controller
{
    public function index(Request $request) 
    {
        if($request->has('cari')){
            $data_tindakan = Tindakan::where('nama_tindakan','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_tindakan = Tindakan::all();
        }
	Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Akses menu Tindakan',
        ]);
        return view('tindakan.index',['data_tindakan' => $data_tindakan]);
    }


    
    public function create(Request $request)
    {
        Tindakan::create($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Tindakan',
        ]);
        return redirect('/tindakan')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $tindakan = Tindakan::find($id);
        return view('tindakan/edit', ['tindakan' =>$tindakan]);
    }
    public function update(Request $request,$id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Tindakan',
        ]);
        return redirect('/tindakan')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Tindakan',
        ]);
        return redirect('/tindakan')->with('sukses','Data berhasil dihapus');
    }
    public function exportExcel() 
    {
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export Excel Data Inventaris',
        ]);
        return Excel::download(new TindakanExport, 'Data Tindakan.xlsx');
    }
    public function exportPdf() 
    {
        $tindakan = Tindakan::all();
        $pdf = PDF::LoadView('export.tindakanpdf',['tindakan' => $tindakan]);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export PDF Data Tindakan',
        ]);
        return $pdf->download('Tindakan.pdf');
    }
}
