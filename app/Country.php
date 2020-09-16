<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id')->order_by('country_name', 'ASC');
    }
}
