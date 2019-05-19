<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class UserRoi extends Model
{
    protected $table = 'users_roi';

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function roiCredit()
    {
        return $this->hasMany('App\RoiCredit','user_roi_id');
    }
}