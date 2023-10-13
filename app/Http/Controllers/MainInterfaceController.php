<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Scene;

use function Laravel\Prompts\select;

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
 
    public function SearchData(Request $request){
        $query = $request->input('search-inputs');

        $title = DB::table('scenes')
                    ->select('title','id')
                    ->where('title', 'LIKE', "%$query%")
                    ->limit(5)
                    ->get();

        echo "loadScene($title->id)";
        return view('mainpage',compact($title));
    }
    

}