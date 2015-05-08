<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Boats extends Model {

    protected $table = 'boats';

    protected $fillable = ['name'];

    public $timestamps =false;

}
