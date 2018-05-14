<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DateOffDetail extends Model
{
	use softDeletes;
    protected $table = 'dateoffdetail';
    public $timestamps = false;
    protected $fillable = ['offday_type', 'offdate_salary_type', 'approval_id', 'approval', 'date_off_from'					, 'date_off_to', 'reason', 'note', 'update_by',
    						'deleted_by'];
    protected $dates = ['deleted_at'];
     $table->softDeletes();

    public function userMaster() {
     	return $this->belongsToMany('App\UserMaster');
    }
}
