<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;

class Payments extends Model implements BillableContract{

    use Billable;



    protected $table = 'payments';

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

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
