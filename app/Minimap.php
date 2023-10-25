<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minimap extends Model
{
    protected $table = 'minimap';
    protected $fillable = [
       'image','title','description'
    ];

    public function scene()
    {
        return $this->belongsTo('App\Scene', 'sourceScene');
    }
}
