<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AccountType;
use App\Reservation;

class Purchase extends Model
{
    public function account_type()
    {
        return $this->belongsTo(AccountType::class, 'acc_type_id');
    }

    public function resrvation()
    {
        return $this->belongsTo(Purchase::class, 'reservation_id');
    }
}
