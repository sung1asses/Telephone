<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


use App\Number;
class NumbersExportFullAdmin implements FromCollection, WithHeadings, ShouldAutoSize
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
            'Должность',
            'Почта',
            'Телефон'
        ];
    }

    public function collection()
    {
         return Number::get(['local_number','name','position','cabinet', 'email', 'telephone_number']);
    }
}
