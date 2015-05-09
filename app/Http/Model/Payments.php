<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model {

    protected $table = 'payments';

    protected $fillable = ['user_id','card_number','ccv','expiration_month','expiration_year','total','taxes'];

    

}
