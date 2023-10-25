<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;
use App\User;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::where('id', Auth::user()->id)->get();
        return view('admin.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */public function update(Request $request)
    {
        $request->validate([
             'fname'=>'required',
             'lname'=>'required',
            
        ]);

        User::where('id', Auth::user()->id)->update([
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
        
        ]);
        
        return redirect()->route('profil')->with(['success' => 'Update Account Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('register')->with('success','Account Register Success');
    }
}
