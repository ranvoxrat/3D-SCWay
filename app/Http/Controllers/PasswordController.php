<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.changepass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'oldpassword' => ['required', 'min:8', new MatchOldPassword],
            'newpassword' => ['required', 'min:8'],
            'confirmpass' => ['same:newpassword', 'min:8'],
        ]);

        User::find(Auth::user()->id)->update(['password'=> Hash::make($request->newpassword)]);
        
        return redirect()->route('adminAccount')->with('success','Password Update successfully!');
        
    }
}
