<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\User;

class Renter extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
