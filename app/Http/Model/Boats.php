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


    public function scopeGetFree( $query, Carbon $dateStart,Carbon $dateEnd)
    {
        $boats = $query->with(['appointments'=>function($q) use($dateStart , $dateEnd){
          $q->where('start','>=', $dateStart)->where('end','<=', $dateEnd->endOfDay());
         }])->orderBy('priority')->get();
        foreach($boats as $boat)
        {
           if(!count($boat->appointments)) return $boat;
            continue;
        }
    }


}
