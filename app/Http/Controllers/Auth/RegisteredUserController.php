<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'status' => ['required'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'address' =>['required', 'string', 'max:255'],
            'username' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile' => ['required','image'],
        ]);
        $file = $request->file('profile');
        $extension = $file->extension();
        $file_name = time() . '.' . $extension;
        $file->move(public_path('img/faces'), $file_name);
        
        $user = User::create([
            'type' => $request['type'],
            'status' => $request['status'],
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'address' => $request['address'],
            'username' => $request['username'],
            'password' => Hash::make($request->password),
            'profile' => $file_name
           
          
        ]);
         $user->attachRole($request->role_id);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
