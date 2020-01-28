<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Number;
class RedactorController extends Controller
{
    public function listNumbers(){
        $numbers = Number::get();
        return view('admin.numbers.index', compact('numbers'));
    } 
    public function createNumbers(){
        return redirect()->route('redactor.numbers.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
    public function deleteNumbers(){
        return redirect()->route('redactor.numbers.list');
    } 
}
