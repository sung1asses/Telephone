<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Number;
class GuestController extends Controller
{

    public function listNumbers(){
    	// Number::order_by('name')->get();

    	// return view('numbers', compact('numbers_list'));
    } 
    public function findNumbers(Request $request){
    	
    }
}
