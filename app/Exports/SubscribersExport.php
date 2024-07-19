<?php

namespace App\Exports;

use App\Models\Suscriber;
use Maatwebsite\Excel\Concerns\FromCollection;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class SubscribersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Suscriber::get();
    }
}
