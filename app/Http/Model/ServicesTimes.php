<?php namespace App\Http\Model;

use App\Http\Helpers\HelperClass;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ServicesTimes extends Model
{

    protected $table = 'services_times';
    protected $fillable = ['services_id', 'time_start', 'time_end'];
    public $timestamps = false;


    /**
     * Return the Service For this Time
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function services()
    {
        return $this->belongsTo('App\Http\Model\Services');
    }

    /**
     * Return Carbon with the date and time this service will start
     * @param Carbon $date
     * @return static
     */
    public function getTimeStart(Carbon $date)
    {
      return  HelperClass::getDayTime($date,$this->attributes['time_start']);
    }

    /**
     * Return Carbon with the date and time this service will end
     * @param Carbon $date
     * @return static
     */
    public function getTimeEnd(Carbon $date)
    {
        return  HelperClass::getDayTime($date,$this->attributes['time_end']);
    }

    /**
     * Return Array with the date and time this service will start and end
     * @param Carbon $date
     * @return mixed
     */
    public function GetTime(Carbon $date)
    {
        $time['start'] = $this->getTimeStart($date);
        $time['end'] =  $this->getTimeEnd($date);
        if($time['start']->gt($time['end']))
        {
            $time['end']->addDay();
        }
        return $time;
    }


}
