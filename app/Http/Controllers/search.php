<?php
namespace App\Http\Controllers;
use App\Scene;
use Illuminate\Http\Request;
class search extends Controller
{
    public function index()
    {
    	return view('mainpage');
    }
    public function selectSearch(Request $request)
    {
    	$movies = [];
        if($request->has('q')){
            $search = $request->q;
            $movies =Scene::select("id", "title")
            		->where('title', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($movies);
    }
}