<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class Image extends Model
{
    protected $guarded=[];
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
