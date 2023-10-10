<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'Rooms';

    protected $fillable = [
        'title','type','image'
    ];
    
    public function hotspots()
    {
        return $this->hasMany('App\Rooms', 'rooms_id');
    }
}
