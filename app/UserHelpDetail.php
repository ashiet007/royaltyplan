<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHelpDetail extends Model
{
    protected $table = 'user_help_details';

    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
