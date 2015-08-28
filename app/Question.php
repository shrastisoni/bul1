<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'questions';
	
	protected $fillable = [
        'title',
        'description'
    ];

}
