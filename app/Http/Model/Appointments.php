<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\HelperClass;

class Appointments extends Model {

    protected $table = 'appointments';

    protected $fillable = ['services_id','payments_id','boat_id','start','end'];

    protected $dates = ['start', 'end'];

    /**
     * Get all The Appointments for today
     * @param $query
     */
    public function scopeToday($query)
    {
        $query->where('date', '>=', Carbon::today());
    }
    /**
     * Get All Appointments By Date
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
        return $query->where('start', '>=', $dates->start)->where('start', '<=', $dates->end);
    }

    /**
     * @return boat associate to this app
     */
    public function boat()
    {
        return $this->belongsTo('App\Http\Model\Boats');
    }

    /**
     * @return Service associate to this app
     */
    public function service()
    {
        return $this->belongsTo('App\Http\Model\Services','services_id','id');
    }

    /**
     * @return Payment associate to this app
     */
    public function payment()
    {
        return $this->belongsTo('App\Http\Model\Payments','payments_id','id');
    }
    /**
     * @return User who Create This appointment
     */
    public function user()
    {
        return $this->belongsTo('App\Http\Model\User','user_id','id');
    }

}
