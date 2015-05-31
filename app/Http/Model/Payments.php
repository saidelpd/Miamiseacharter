<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;
use App\Http\Helpers\HelperClass;

class Payments extends Model implements BillableContract{

    use Billable;

    protected $table = 'payments';

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    protected $fillable = ['user_id','user_commission_id','stripe_fee','total','taxes','commission'];

    /**
     * Get All Payments By Date
     * @param $query
     * @param $startDate
     * @param null $endDate
     * @param bool $period if false will return only the day selected if true will return a period from the startDate to now()
     * @return
     * @internal param Carbon $date
     */
    public function scopeByDate($query, $startDate, $endDate = null, $period = true)
    {
        $dates = HelperClass::ByDateScope($startDate, $endDate, $period);
        return $query->where('created_at', '>=', $dates->start)->where('created_at', '<=', $dates->end);
    }

    public function scopeActive($query)
    {
      return $query->where('stripe_active',1);
    }

    /**
     * Return Total Charge
     * @return mixed
     */
    public function getTotalTaxes()
    {
        return $this->attributes['total'] + $this->attributes['taxes'];
    }

    /**
     * Return Total After Deductions
     * @return mixed
     */
    public function getTotalClean()
    {
        return ($this->attributes['total'] + $this->attributes['taxes']) - ($this->attributes['stripe_fee'] + $this->attributes['commission']);
    }

    /**
     * @return User who Create This payment
     */
    public function user()
    {
        return $this->belongsTo('App\Http\Model\User','user_id','id');
    }



}
