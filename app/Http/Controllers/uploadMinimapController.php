<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class uploadMinimapController extends Controller
{
    public function index(){
        return view("admin.configMinimap");
    }
    public function uploadMap($request) 
   {
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'image' => 'required|image'
    ]);

    $file = $request->file('image');
    $extension = $file->extension();
    $file_name = time() . '.' . $extension;
    $file->move(public_path('img/uploads'), $file_name);
    
    User::create([
        'title' => $request['title'],
        'description' => $request['description'],
        'image' => $file_name
    ]);
    return redirect()->route('uploadMinimap')->with('success', 'Map Uploaded Successfuly');
   }
}
