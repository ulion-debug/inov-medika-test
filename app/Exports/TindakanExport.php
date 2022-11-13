<?php

namespace App\Exports;

use App\Models\Tindakan;
use Maatwebsite\Excel\Concerns\FromCollection;

class TindakanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tindakan::all();
    }
}
