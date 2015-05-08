<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model {

    protected $table = 'commission';

    protected $fillable = ['user_id','commission_regular','commission_plus'];



}
