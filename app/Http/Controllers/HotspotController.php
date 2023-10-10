<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotspot;
use App\Scene;
class HotspotController extends Controller
{
    public function index()
    {
        $scene = Scene::all();
        $hotspots = Hotspot::all();
<<<<<<< HEAD
        return view('admin.configHotspot', compact('hotspots', 'scene'));
=======
        return view('admin.configHotspot', compact('scene','hotspots'));
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
            'sourceScene' => 'required',
            'targetScene' => 'required',
            'type' => 'required',
            'yaw' => 'required|min:-360|max:360',
            'pitch' => 'required|min:-360|max:360',
            'text' => 'required'
        ]);
        
        Hotspot::create([
            'type' => $request['type'],
            'yaw' => $request['yaw'],
            'pitch' => $request['pitch'],
            'info' => $request['text'],
            'sourceScene' => $request['sourceScene'],
            'targetScene' => $request['targetScene']
        ]);
        
<<<<<<< HEAD
        return redirect()->route('config')->with('success', 'Hotspot Berhasil Ditambahkan');
=======
        return redirect()->route('config')->with('success', 'Hotspot Add Successfully');
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    }
    public function addHotspt(){
        $scene = Scene::all();
        $hotspots = Hotspot::all();
        return view('admin.addHotspot', compact('hotspots', 'scene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sourceScene' => 'required',
            'targetScene' => 'required',
            'type' => 'required',
            'yaw' => 'required|min:-360|max:360',
            'pitch' => 'required|min:-360|max:360',
            'text' => 'required'
        ]);

        Hotspot::where('id', $id)->update([
            'type' => $request['type'],
            'yaw' => $request['yaw'],
            'pitch' => $request['pitch'],
            'info' => $request['text'],
            'sourceScene' => $request['sourceScene'],
            'targetScene' => $request['targetScene']
        ]);
        
<<<<<<< HEAD
        return redirect()->route('config')->with(['success' => 'Hotspot Berhasil Diubah']);
=======
        return redirect()->route('config')->with(['success' => 'Update Hotspot Successfully']);
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotspot = Hotspot::find($id);
        return view('/scene', compact('hotspot', 'id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotspot::destroy($id);
<<<<<<< HEAD
        return redirect()->route('config')->with('success','Hotspot Berhasil Dihapus');
=======
        return redirect()->route('config')->with('success','Hotspot Deleted Successfully');
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    }
}
