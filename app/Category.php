<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;
class Category extends Model
{
    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
