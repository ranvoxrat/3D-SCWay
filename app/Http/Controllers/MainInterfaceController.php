<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
}