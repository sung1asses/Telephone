<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Number;
use App\Institute;
class GuestController extends Controller
{

    public function listNumbers(){
        $institutes = Institute::with('numbers')->get();
        // $institutes->makeHidden('telephone_number');
        // dd($institutes[0]->numbers);
    	return view('numbers', compact('institutes'));
    }

    public function exportShort() 
    {
        return Excel::download(new \App\Exports\NumbersExportShort, 'numbers_short.xlsx');
    }
    public function exportFull() 
    {
        return Excel::download(new \App\Exports\NumbersExportFull, 'numbers_full.xlsx');
    }
}
