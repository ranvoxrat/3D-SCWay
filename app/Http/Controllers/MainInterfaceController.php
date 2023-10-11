<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Scene;
class MainInterfaceController extends Controller
{
    public function interface()
    {
        $fscene= DB::table('scenes')->where('status', '1')->first();
        $scenes= DB::table('scenes')->get();
        $hotspots = DB::table('hotspots')
            ->join('scenes', 'scenes.id', '=', 'hotspots.sourceScene')
            ->select('hotspots.*')
            ->get();
            
        return view('mainInterface', compact('fscene', 'scenes', 'hotspots'));
    }
 
    public function index(Request $request){
        
        $searchData = $request->input('search');
        $users = DB::table('scenes')->where('title','LIKE','%'. $searchData .'%')->get();

        // $users = Scene::with('title', function($query) use ($search) {
        //      $query->where('title', 'LIKE', '%' . $search . '%');
        // })->get();

        return redirect()->route('mainpage',compact('users'));
    }
    
    
}