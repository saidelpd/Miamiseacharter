<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Boats extends Model {

    protected $table = 'boats';

    protected $fillable = ['name','color'];

    public $timestamps =false;

    public function appointments()
    {
        return $this->hasMany('App\Http\Model\Appointments','boat_id','id');
    }


    public function scopeGetFree( $query, Carbon $dateStart,Carbon $endDate)
    {
        $start_date = clone $dateStart;
        $end_date =  clone $dateStart;
        $start_date->startOfDay();
        $end_date->endOfDay();
        $boats = $query->with(['appointments'=>function($q) use($start_date,$end_date){
          $q->where('start','>=',$start_date)
              ->where('start','<',$end_date);
         }])->orderBy('priority','DESC')->get();
        foreach($boats as $boat)
        {
           if(!count($boat->appointments)) return $boat;
            $allow = $boat->appointments->filter(function($app) use ($dateStart,$endDate){
                  return ( $dateStart->between($app->start, $app->end) ||
                      $endDate->between($app->start, $app->end) ||
                      $app->start->between($dateStart,$endDate) ||
                      $app->end->between($dateStart,$endDate));
            });
            if(!count($allow)) return $boat;
            continue;
        }
        return null;
    }


}
