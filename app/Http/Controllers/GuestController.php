<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Number;
use App\Institute;
class GuestController extends Controller
{

    public function listNumbers(){
    	$numbers = Number::orderBy('name')->get();
        $institutes = Institute::get();
    	return view('numbers', compact('numbers','institutes'));
    } 
    public function findNumbers(Request $request){
    	
    }
}
