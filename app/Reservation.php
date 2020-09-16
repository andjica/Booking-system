<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Room;
use App\Purchase;

class Reservation extends Model
{
    protected $guarded=[];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function purchase()
    {
        return $this->hasOne(Purchase::class, 'reservation_id');
    }

}
