<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    protected $table = 'user_pins';

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function pinHelpAmount()
    {
        return $this->belongsTo('App\PinHelpAmount','pin_help_amount_id');
    }
}
