<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


use App\Number;
class NumbersExportFull implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Внутренние номера',
            'Ф.И.О.',
            'Должность',
            'Кабинет',
            'Почта',
        ];
    }

    public function collection()
    {
         return Number::get(['local_number','name','position','cabinet', 'email']);
    }
}
