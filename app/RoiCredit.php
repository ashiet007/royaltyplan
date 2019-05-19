<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class RoiCredit extends Model
{
    protected $table = 'roi_credits';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User','giver_user_id');
    }

    public function userRoi()
    {
        return $this->belongsTo('App\UserRoi','user_roi_id');
    }
}