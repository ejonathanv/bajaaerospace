<?php

namespace App\Exports;

use App\Models\EventRegister;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventRegistersExport implements FromCollection
{

    public $event_id;

    public function __construct($event_id)
    {
        $this->event_id = $event_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EventRegister::where('event_id', $this->event_id)->get();
    }
}
