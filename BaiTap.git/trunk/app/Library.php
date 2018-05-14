<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
	use SoftDeletes;
    protected $table = 'library';
    public $timestamps = false;
    protected $fillable = ['name', 'note', 'create_by', 'update_by',
    						'deleted_by'];
    protected $dates = ['deleted_at'];
}
