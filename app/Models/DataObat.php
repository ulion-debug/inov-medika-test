<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    use HasFactory;

    protected $table = 'data_obat';
    protected $fillable = ['kode','nama_obat','jenis','stok','harga'];
}
