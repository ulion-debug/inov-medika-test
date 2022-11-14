<?php
use App\Models\Pasien;
use App\Models\DataObat;
use App\Models\Transaksi;

function totalPasien()
{
    return Pasien::count();
}

function totalRawatInap()
{
    
    return Pasien::where('nama_tindakan','=','Rawat Inap')->get()->count();
}

function totalRawatJalan()
{
    
    return Pasien::where('nama_tindakan','=','Rawat Jalan')->get()->count();
}

function totalkonsultasi()
{
    
    return Pasien::where('nama_tindakan','=','Konsultasi')->get()->count();
}

function totalObat()
{
    return DataObat::count();
}