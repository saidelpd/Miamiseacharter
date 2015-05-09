<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ServicesTimes extends Model {

    protected $table = 'services_times';
    protected $fillable = ['services_id','time_start','time_end'];
    public $timestamps =false;

}
