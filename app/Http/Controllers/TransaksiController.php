<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; 
use DB;
use App\Models\Aktivitas;
use App\Models\Pasien;
use App\Models\Transaksi;
use App\Models\Tindakan;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = Transaksi::where('kode','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_transaksi = Transaksi::all();
        }
        $data_pasien = Pasien::all();
        $data = DB::table('pasien')
                ->join('transaksi', 'transaksi.nama_pasien','=','pasien.nama_lengkap')
                ->get();
        $data_tindakan = Tindakan::all();
        return view('transaksi.index',compact('data_pasien','data_transaksi','data','data_tindakan'));
    }
    public function create(Request $request)
    {
        Transaksi::create($request->all());
        
        return redirect('/transaksi')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        
        $transaksi = Transaksi::find($id);
        return view('transaksi/edit', ['transaksi' =>$transaksi]);
    }
    public function update(Request $request,$id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Transaksi',
        ]);
        return redirect('/transaksi')->with('sukses','Data berhasil dihapus');
    }

    public function bayar($id)
    {
        
        $transaksi = Transaksi::find($id);
        return view('informasi/bayar', ['transaksi' =>$transaksi]);
    }
    public function bayarupdate(Request $request,$id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/informasi')->with('sukses','Data berhasil diupdate');
    }

    public function exportExcel() 
    {
        return Excel::download(new TransaksiExport, 'Transaksi.xlsx');
    }
    public function exportPdf() 
    {
        $transaksi = Transaksi::all();
        $pdf = PDF::LoadView('export.transaksipdf',['transaksi' => $transaksi]);
        return $pdf->download('transaksi.pdf');
    }
    public function GetTransaksi(){
        $tindakan = Tindakan::all();

        return response()->json($tindakan);
    }

    public function grafik(){
        $total_transaksi = Transaksi::select(DB::raw("CAST(SUM(harga) as int) as harga"))
        ->GroupBy(DB::raw("Month(tanggal)"))
        ->orderBy('harga','ASC')
        ->pluck('harga');
        //dd($total_transaksi);

        $bulan = Transaksi::select(DB::raw("MONTHNAME(tanggal) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(tanggal)"))
        ->pluck('bulan');
        //dd($bulan);

        return view('transaksi.grafik', compact('total_transaksi', 'bulan'));
    }
}
