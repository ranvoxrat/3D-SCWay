<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Scene;
class MainInterfaceController extends Controller
{
    
 
    public function findData(){
        $scene = Scene::all();
        $filterdata = search('Building E',fn (string $value) => strlen($value) > 0? Scene::where('title', 'like', "%{$value}%")->pluck('title', 'id')->all(): [] );
        return view('mainInterface',compact('scene','filterdata'));
     }
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
 
       
    
    
}