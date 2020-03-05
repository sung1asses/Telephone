<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Number;
use App\Institute;
class RedactorController extends Controller
{
    public function listNumbers(){
        $institutes = Institute::orderBy('position')->get();
        return view('admin.numbers.index', compact('institutes'));
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

            \Auth::user()->logs()->create([
                'text'=> 'Пользователь '.\Auth::user()->name.': Создал номер: <br>'
                .'<b class="ml-2">внутренний номер:</b> '.$request['local_number'].', <br>'
                .'<b class="ml-2">фио:</b> '.$request['name'].', <br>'
                .'<b class="ml-2">должность:</b> '.$request['position'].', <br>'
                .'<b class="ml-2">кабинет:</b> '.$request['cabinet'].', <br>'
                .'<b class="ml-2">почта:</b> '.$request['email'].', <br>'
                .'<b class="ml-2">телефон:</b> '.$request['telephone_number'],
            ]);
            return redirect()->route('redactor.numbers.list')
                    ->with('succ', 'Запись успешно создана!');
        }
        return redirect()->route('redactor.numbers.list')
                ->withInput()
                ->with('error', 'Не найден институт');
    }

    public function updateNumbers($id, Request $request){
        $number = Number::findOrFail($id);
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'position' => ['max:255'],
            'cabinet' => ['max:255'],
            'email' => ['email', 'max:255'],
        ]);

        if($validation->fails()) {
            return $validation;
        };

        \Auth::user()->logs()->create([
            'text'=> 'Пользователь '.\Auth::user()->name.': Обновил номер: <br>'
            .'<b class="ml-2">внутренний номер:</b> '.$number->local_number.' => '.$request['local_number'].', <br>'
            .'<b class="ml-2">фио:</b> '.$number->name.' => '.$request['name'].', <br>'
            .'<b class="ml-2">должность:</b> '.$number->position.' => '.$request['position'].', <br>'
            .'<b class="ml-2">кабинет:</b> '.$number->cabinet.' => '.$request['cabinet'].', <br>'
            .'<b class="ml-2">почта:</b> '.$number->email.' => '.$request['email'].', <br>'
            .'<b class="ml-2">телефон:</b> '.$number->telephone_number.' => '.$request['telephone_number'],
        ]);

        $number->update([
            'name' => $request['name'],
            'position' => $request['position'],
            'cabinet' => $request['cabinet'],
            'email' => $request['email'],
            'local_number' => $request['local_number'],
            'telephone_number' => $request['telephone_number'],
        ]);
        $numbers = Institute::orderBy('position')->with('numbers')->get();
        return $numbers;
    }

    public function deleteNumbers($id){
        $number = Number::find($id);
        \Auth::user()->logs()->create([
            'text'=> 'Пользователь '.\Auth::user()->name.': Удалил номер: <br>'
            .'<b class="ml-2">внутренний номер:</b> '.$number->local_number.', <br>'
            .'<b class="ml-2">фио:</b> '.$number->name.', <br>'
            .'<b class="ml-2">должность:</b> '.$number->position.', <br>'
            .'<b class="ml-2">кабинет:</b> '.$number->cabinet.', <br>'
            .'<b class="ml-2">почта:</b> '.$number->email.', <br>'
            .'<b class="ml-2">телефон:</b> '.$number->telephone_number,
        ]);
        $number->delete();
        $numbers = Institute::orderBy('position')->with('numbers')->get();
        return $numbers;
    }


    public function listInstitutes(){
        $institutes = Institute::orderBy('position')->get();
        return view('admin.institutes.index', compact('institutes'));
    } 

    public function updatePosition(Request $request){
        $i=0;
        foreach ($request->institutes as $institute) {
            Institute::find($institute['id'])->update(['position' => $i++]);
        }
        return Institute::orderBy('position')->get();
    }

    public function createInstitutes(Request $request){
        $institute = Institute::orderBy('position')->where("name",$request['name'])->first();
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
                'position' => 10000,
            ]);

            \Auth::user()->logs()->create([
                'text'=> 'Пользователь '.\Auth::user()->name.': Создал структуру университета: <br>'
            .'<b class="ml-2">название: </b> '.$request['name']
            ]);
            return redirect()->route('redactor.institutes.list')
                    ->with('succ', 'Запись успешно создана!');
        }
        return redirect()->route('redactor.institutes.list')
                ->withInput()
                ->with('error', 'Институт уже создан!');
    } 
    public function updateInstitutes($id, Request $request){
        $institute = Institute::findOrFail($id);
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        if($validation->fails()) {
            return false;
        };
        \Auth::user()->logs()->create([
            'text'=> 'Пользователь '.\Auth::user()->name.': Обновил структуру университета: <br>'
            .'<b class="ml-2">название: </b> '.$institute->name.' => '.$request['name']
        ]);
        $institute->update(['name' => $request['name']]);
        $numbers = Institute::orderBy('position')->with('numbers')->get();
        return $numbers;
    }
    public function deleteInstitutes($id){
        $institute = Institute::find($id);
        \Auth::user()->logs()->create([
            'text'=> 'Пользователь '.\Auth::user()->name.': Удалил структуру университета: <br>'
            .'<b class="ml-2">название: </b> '.$institute->name
        ]);
        $institute->numbers()->delete();
        $institute->delete();
        return Institute::orderBy('position')->get();
    }
}
