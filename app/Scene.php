<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $table = 'scenes';

    protected $fillable = [
        'title', 'type', 'hfov',  'pitch','yaw','horizonRoll','horizonPitch', 'image', 'status'
    ];
    
    public function hotspots()
    {
        return $this->hasMany('App\Hotspot', 'sourceScene');
    }
}
