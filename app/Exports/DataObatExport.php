<?php

namespace App\Exports;

use App\Models\DataObat;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataObatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataObat::all();
    }
}
