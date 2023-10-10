<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

class MainInterfaceController extends Controller
{

=======
use App\Scene;
class MainInterfaceController extends Controller
{
    
 
    public function findData(){
        $scene = Scene::all();
        $filterdata = search('Building E',fn (string $value) => strlen($value) > 0? Scene::where('title', 'like', "%{$value}%")->pluck('title', 'id')->all(): [] );
        return view('mainInterface',compact('scene','filterdata'));
     }
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    public function interface()
    {
        $fscene= DB::table('scenes')->where('status', '1')->first();
        $scenes= DB::table('scenes')->get();
        $hotspots = DB::table('hotspots')
            ->join('scenes', 'scenes.id', '=', 'hotspots.sourceScene')
            ->select('hotspots.*')
            ->get();
<<<<<<< HEAD
        return view('mainInterface', compact('fscene', 'scenes', 'hotspots'));
    }
=======
            
        return view('mainInterface', compact('fscene', 'scenes', 'hotspots'));
    }
 
       
    
    
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
}