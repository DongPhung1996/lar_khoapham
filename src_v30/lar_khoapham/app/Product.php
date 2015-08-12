<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'product';

	protected $fillable = ['id','name','price','cate_id'];

	public $timestamps = false;

}
