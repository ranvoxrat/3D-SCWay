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
        return view('admin.configHotspot', compact('scene','hotspots'));
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
        
        return redirect()->route('configHotspot')->with('success', 'Hotspot Add Successfully');
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
            'type' => 'required|min:-360|max:360',
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
        
        return redirect()->route('configHotspot')->with(['success' => 'Update Hotspot Successfully']);
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
        return redirect()->route('configHotspot')->with('success','Hotspot Deleted Successfully');
    }
}
