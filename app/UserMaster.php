<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserMaster extends Model
{
	use softDeletes;
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'user_cd';
    protected $fillable = ['user_cd', 'user_nm', 'user_ab', 'user_kn', 'password', 'user_add',
    						'birth_day', 'gender', 'avatar', 'note', 'create_by', 'update_by',
    						'deleted_by'];
    protected $date = ['deleted_at'];

    public function dayOffDetail() {
     	return $this->belongsToMany('App\DateOffDetail');
    }

    public function totalDateOff() {
     	return $this->belongsToMany('App\TotalDateOff');
    }
}
