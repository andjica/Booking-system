<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Accoount;

class AccountType extends Model
{
    public function accounttypes()
    {
        return $this->hasMany(Account::class);
    }
}
