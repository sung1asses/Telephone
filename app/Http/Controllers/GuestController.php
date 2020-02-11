<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function findNumbers(Request $request){
    	
    }
}
