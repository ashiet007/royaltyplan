<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class UserPin extends Model
{
    protected $table = 'user_pins';


    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function PinHelpAmount()
    {
        return $this->belongsTo('App\PinHelpAmount','pin_help_amount_id');
    }
}