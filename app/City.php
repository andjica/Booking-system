<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class City extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
