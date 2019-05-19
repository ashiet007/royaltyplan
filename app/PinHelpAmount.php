<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PinHelpAmount extends Model
{
    protected $table = 'pin_help_amount';

    public function pin()
    {
        return $this->hasMany('App\Pin','pin_help_amount_id');
    }

    public function userPinDetail()
    {
        return $this->hasMany('App\UserPin','pin_help_amount_id');
    }
}
