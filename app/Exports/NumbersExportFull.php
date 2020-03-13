<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


use App\Number;
use App\Institute;
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
            'Департамент',
            'Кабинет',
            'Почта',
        ];
    }

    public function collection()
    {
    	$numbers = Number::with('institute')->get();
    	$data = collect([]);
    	$i = 0;
		foreach ($numbers as $number) {
    		$data[$i] = [
    			'local_number' => $number->local_number,
	    		'name' => $number->name,
	    		'position' => $number->position,
	    		'institute' => $number->institute->name,
	    		'cabinet' => $number->cabinet, 
	    		'email' => $number->email
	    	];
    		$i++;
		}
         return $data->sortBy('institute');
    }
}
