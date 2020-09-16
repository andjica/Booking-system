<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;
use App\Image;
use App\City;
use App\User;
use App\Category;

class Room extends Model
{
    protected $guarded=[];
    
    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }
    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
