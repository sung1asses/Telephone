<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Number;
class GuestController extends Controller
{

    public function listNumbers(){
    	$numbers = Number::orderBy('name')->get();

    	return view('numbers', compact('numbers'));
    } 
    public function findNumbers(Request $request){
    	
    }
}
