<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


use App\User;
use App\Number;
use App\Role;
use App\Institute;
use App\Log;
class AdminController extends Controller
{
    public function home(){
        $institutes = Institute::orderBy('position')->with('numbers')->get();
        return view('admin.home',compact('institutes'));
    }

    public function exportFull() 
    {
        return Excel::download(new \App\Exports\NumbersExportFullAdmin, 'numbers_full.xlsx');
    }

    // Redactors
    public function listRedactor(){
    	$redactors = Role::where('group', 'redactor')->first()->users()->get();
        return view('admin.redactors.index', compact('redactors'));
    } 
    public function createRedactor(Request $request){
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'sname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validation->fails()) {
            return redirect()->route('admin.redactor.list')
                        ->withInput()
                        ->withErrors($validation);
        };

        $name = ucfirst(strtolower($request['sname']))." ".ucfirst(strtolower($request['fname']));
        $email = strtolower($request['fname'])[0].".".strtolower($request['sname']).".redactor";
        if(!User::where("email",$email)->first()){
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => \Illuminate\Support\Facades\Hash::make($request['password']),
            ])->attachRole(Role::where('group', 'redactor')->first());
        }
        \Auth::user()->logs()->create([
            'text'=> 'Админ '.\Auth::user()->name.': Создал редактора '.$name,
        ]);
        return redirect()->route('admin.redactor.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
    public function deleteRedactor($id){
        $user = User::find($id);
        \Auth::user()->logs()->create([
            'text'=> 'Админ '.\Auth::user()->name.': Удалил редактора '.$user->name,
        ]);
        $user->delete();
        return redirect()->route('admin.redactor.list');
    }

    // watchers
    public function listWatcher(){
        $watchers = Role::where('group', 'watcher')->first()->users()->get();
        return view('admin.watchers.index', compact('watchers'));
    } 
    public function createWatcher(Request $request){
        $validation = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'sname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validation->fails()) {
            return redirect()->route('admin.watcher.list')
                        ->withInput()
                        ->withErrors($validation);
        };

        $name = ucfirst(strtolower($request['sname']))." ".ucfirst(strtolower($request['fname']));
        $email = strtolower($request['fname'])[0].".".strtolower($request['sname']);
        if(!User::where("email",$email)->first()){
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => \Illuminate\Support\Facades\Hash::make($request['password']),
            ])->attachRole(Role::where('group', 'Watcher')->first());

            \Auth::user()->logs()->create([
                'text'=> 'Админ '.\Auth::user()->name.': Создал пользователя высокого уровня '.$name,
            ]);
        }
        return redirect()->route('admin.watcher.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
    public function deleteWatcher($id){
        $user = User::find($id);
        \Auth::user()->logs()->create([
            'text'=> 'Админ '.\Auth::user()->name.': Удалил пользователя высокого уровня '.$user->name,
        ]);
        $user->delete();
        return redirect()->route('admin.watcher.list');
    }

    public function logs()
    {
        $logs = \App\Log::limit(300)->orderBy('id', 'desc')->get();
        return view('admin.logs', compact('logs'));
    }

}