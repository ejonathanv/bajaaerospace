<?php

namespace App\Exports;

use App\Models\WebinarRegister;
use Maatwebsite\Excel\Concerns\FromCollection;

class WebinarRegistersExport implements FromCollection
{

    public $webinar_id;

    public function __construct($webinar_id)
    {
        $this->webinar_id = $webinar_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return WebinarRegister::where('webinar_id', $this->webinar_id)->get();
    }
}
