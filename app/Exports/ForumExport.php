<?php

namespace App\Exports;

use App\Models\Forum;
use Maatwebsite\Excel\Concerns\FromCollection;

class ForumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Forum::all();
    }
}
