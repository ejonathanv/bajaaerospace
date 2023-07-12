<?php

namespace App\Exports;

use App\Models\WebinarRegister;
use Maatwebsite\Excel\Concerns\FromCollection;

class WebinarRegistersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return WebinarRegister::all();
    }
}
