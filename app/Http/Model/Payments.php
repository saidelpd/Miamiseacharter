<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model {

    protected $table = 'payments';

    protected $fillable = ['user_id','card_number','ccv','expiration_month','expiration_year','total','taxes'];

    public function getTotalTaxes()
    {
        return $this->attributes['total'] + $this->attributes['taxes'];
    }

    /**
     * @return User who Create This payment
     */
    public function user()
    {
        return $this->belongsTo('App\Http\Model\User','user_id','id');
    }


}
