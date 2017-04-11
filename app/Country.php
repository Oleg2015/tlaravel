<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
//	use SoftDeletes;

	protected $table = 'countrys';
	protected $primaryKey = 'id';
	public $incrementing = TRUE;
	public $timestamps = TRUE;
	protected $fillable = ['name','text'];
	protected $guarded = ['*'];
	protected $dates = ['deleted_at'];
	
	public function user() {
		return $this->belongsTo('App\User');
	}
	
}
