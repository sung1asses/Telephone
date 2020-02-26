<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Number;
use App\Institute;
class RedactorController extends Controller
{
    public function listNumbers(){
        $institutes = Institute::get();
        $numbers = Number::get();
        return view('admin.numbers.index', compact('numbers', 'institutes'));
    } 
    public function createNumbers(Request $request){
        $institute = Institute::find($request['institute_id']);
        if($institute){
            $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'name' => ['required', 'max:255'],
                'position' => ['max:255'],
                'cabinet' => ['max:255'],
                'email' => ['email', 'max:255'],
            ]);

            if($validation->fails()) {
                return redirect()->route('redactor.numbers.list')
                            ->withInput()
                            ->withErrors($validation);
            };
            if(!$institute->numbers()->where("name",$request['name'])->first()){
                $institute->numbers()->create([
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
        return redirect()->route('redactor.numbers.list')
                ->withInput()
                ->with('error', 'Не найден институт');
    }

    public function updateNumbers($id, Request $request){
        $number = Number::find($id);
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'position' => ['max:255'],
            'cabinet' => ['max:255'],
            'email' => ['email', 'max:255'],
        ]);

        if($validation->fails()) {
            return $validation;
        };
        $number->update([
            'name' => $request['name'],
            'position' => $request['position'],
            'cabinet' => $request['cabinet'],
            'email' => $request['email'],
            'local_number' => $request['local_number'],
            'telephone_number' => $request['telephone_number'],
        ]);
        $numbers = Institute::with('numbers')->get();
        return $numbers;
    }

    public function deleteNumbers($id){
        Number::find($id)->delete();
        return redirect()->route('redactor.numbers.list');
    }


    public function listInstitutes(){
        $institutes = Institute::get();
        return view('admin.institutes.index', compact('institutes'));
    } 
    public function createInstitutes(Request $request){
        $institute = Institute::where("name",$request['name'])->first();
        if(!$institute){
            $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
            ]);

            if($validation->fails()) {
                return redirect()->route('redactor.institutes.list')
                            ->withInput()
                            ->withErrors($validation);
            };
            Institute::create([
                'name' => $request['name'],
            ]);
            return redirect()->route('redactor.institutes.list')
                    ->with('succ', 'Запись успешно создана!');
        }
        return redirect()->route('redactor.institutes.list')
                ->withInput()
                ->with('error', 'Институт уже создан!');
    } 
    public function deleteInstitutes($id){
        $institute = Institute::find($id);
        $institute->numbers()->delete();
        $institute->delete();
        return redirect()->route('redactor.institutes.list');
    }
}
