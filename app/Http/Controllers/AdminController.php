<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


use App\User;
use App\Number;
use App\Role;
use App\Institute;
class AdminController extends Controller
{
    public function home(){
        $institutes = Institute::with('numbers')->get();
        // $institutes->makeHidden('telephone_number');
        // dd($institutes[0]->numbers);
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
        return redirect()->route('admin.redactor.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
    public function deleteRedactor($id){
        User::find($id)->delete();
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
        }
        return redirect()->route('admin.watcher.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
    public function deleteWatcher($id){
        User::find($id)->delete();
        return redirect()->route('admin.watcher.list');
    }

}