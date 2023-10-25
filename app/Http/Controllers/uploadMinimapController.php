<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Minimap;
class uploadMinimapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $mini = Minimap::all();
        return view("admin.configMinimap",compact('mini'));
    }
    public function uploadMap(Request $request) 
   {
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'image' => 'required|image'
    ]);
    $file = $request->file('image');
    $fileName = $file->getClientOriginalName();
    $file->move(public_path('img/minimap'), $fileName);
    Minimap::create([
        'title' => $request['title'],
        'description' => $request['description'],
        'image' => $fileName
    ]);
    return redirect()->route('minimap')->with('success', 'Map Uploaded Successfuly');
   }
   public function showMinimap(){
    $Account = DB::table('minimap')-> select('*');
    return Datatables::of($Account)  ->addColumn('action', function ($row) {
    return '<a href="#" class="text-success" data-toggle="modal" 
              data-target="#Profile'. $row->id.'"><i class="fa fa-eye"></i></a>
            <a href="#" class="text-info" data-toggle="modal" 
        data-target="#EditProfileAdmin' . $row->id . '"><i class="fa fa-edit"></i></a>
            <a href="#" class="text-danger" data-toggle="modal" 
        data-target="#deleteModal'. $row->id .'"><i class="fa fa-trash"></i></a>';
    })
    ->make(true);
}
}
