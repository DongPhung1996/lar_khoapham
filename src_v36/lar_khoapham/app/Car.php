<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	protected $table = 'cars';

	protected $fillable = ['name','price'];

	public function color () {
		return $this->belongsToMany('App\Color','car_colors');
	}
}
