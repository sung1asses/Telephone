<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Number;
use App\Role;
class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    } 
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
                        ->with('error', 'Ошибка ввода');
        };

        $name = ucfirst($request['sname'])." ".ucfirst($request['fname']);
        $email = strtolower($request['sname'])."_".strtolower($request['fname'])."@redactor.redactor";
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
        return redirect()->route('admin.redactor.list')
                ->with('succ', 'Очередь успешно создана...');
    } 
}
