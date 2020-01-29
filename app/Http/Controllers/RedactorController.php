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
    public function createNumbers(Request $request){
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'cabinet' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'local_number' => ['required', 'string', 'max:255'],
            'telephone_number' => ['required', 'string', 'max:255'],
        ]);

        if($validation->fails()) {
            return redirect()->route('redactor.numbers.list')
                        ->withInput()
                        ->with('error', 'Ошибка ввода');
        };
        if(!Number::where("name",$request['name'])->first()){
            Number::create([
                'name' => $request['name'],
                'position' => $request['position'],
                'cabinet' => $request['cabinet'],
                'email' => $request['email'],
                'local_number' => $request['local_number'],
                'telephone_number' => $request['telephone_number'],
            ]);
        }
        return redirect()->route('redactor.numbers.list')
                ->with('succ', 'Запись успешно создана!');
    } 
    public function deleteNumbers(){
        return redirect()->route('redactor.numbers.list');
    } 
}
