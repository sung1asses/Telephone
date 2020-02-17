<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


use App\Number;
class NumbersExportShort implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Внутренние номера',
            'Ф.И.О.',
            'Кабинет',
        ];
    }

    public function collection()
    {
         return Number::get(['local_number','name','cabinet']);
    }
}
