<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
class CreateAccountController extends Controller

{

    public function index(){
           
            return view('admin.createAccount');
    }
    protected function createAccount(Request $request){
        $request->validate([
           
            'type' => 'required',
            'status' => 'required',
            'fname' => 'required|min:-360|max:360',
            'lname' => 'required|min:-360|max:360',
            'age' => 'required|min:-360|max:360',
            'gender' => 'required|min:-360|max:360',
            'address' => 'required|min:-360|max:360',
            'username' => 'required|unique:users',
            'password' => 'required|same:password',
            'profile' => 'required'
        ]);
       
        $file = $request->file('profile');
        $extension = $file->extension();
        $file_name = time() . '.' . $extension;
        $file->move(public_path('img/faces'), $file_name);
        
        User::create([
            
            'type' => $request['type'],
            'status' => $request['status'],
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'profile' => $file_name
        ]);
       
       return redirect()->route('profil')->with('success','You\'ve Successfully Registered');

    }
    public function update(Request $request){
        $request->validate([
            'type' => 'required',
            'status' => 'required',
            'fname' => 'required|min:-360|max:360',
            'lname' => 'required|min:-360|max:360',
            'age' => 'required|min:-360|max:360',
            'gender' => 'required|min:-360|max:360',
            'address' => 'required|min:-360|max:360',
            'username' => 'required|unique:users',
            'password' => 'required|same:password',
            'profile' => 'required'
        ]);

        $file = $request->file('profile');
        if ($file == '') {
            $file_name=$request->profile;
        } else {
            $extension = $file->extension();
            $file_name = time() . '.' . $extension;
            $file->move(public_path('img/faces'), $file_name);
        }

        User::where('id',$request)->update([
            'type' => $request['type'],
            'status' => $request['status'],
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'profile' => $file_name
        ]);
        
        return redirect()->route('profil')->with('success', 'Profile Updated Successfully');
    }

   
}
    
