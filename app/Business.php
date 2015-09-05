<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'businesses';
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['userId'];

}
