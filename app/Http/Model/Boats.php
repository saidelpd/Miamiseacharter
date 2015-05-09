<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Boats extends Model {

    protected $table = 'boats';

    protected $fillable = ['name'];

    public $timestamps =false;

    public function appointments()
    {
        return $this->hasMany('App\Http\Model\Appointments','services_id','id');
    }



    public static function getFree(Carbon $date)
    {
        $boats = self::with(['appointments'=>function($q) use($date){
          $q->where('start','>=', $date->startOfDay()->toDateTimeString())->where('end','>=', $date->endOfDay()->toDateTimeString());
         }])->orderBy('priority')->get();

        foreach($boats as $boat)
        {

        }
    }


}
