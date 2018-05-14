<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TotalDateOff extends Model
{
	use softDeletes;
    protected $table = 'totaldateoff';
    public $timestamps = false;
    protected $fillable = ['total_day', 'day_left', 'note', 'create_by', 'update_by',
    						'deleted_by'];
    protected $dates = ['deleted_at'];
     $table->softDeletes();

    public function userMaster() {
     	return $this->belongsToMany('App\UserMaster');
    }
}
