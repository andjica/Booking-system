<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AccountType;

class Account extends Model
{
    protected $guarded = [];

    public function accounttype()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
