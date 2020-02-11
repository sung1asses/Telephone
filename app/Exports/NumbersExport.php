<?php

namespace App\Exports;

use App\Number;
use Maatwebsite\Excel\Concerns\FromCollection;

class NumbersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return Number::get(['local_number','name','cabinet']);
    }
}
