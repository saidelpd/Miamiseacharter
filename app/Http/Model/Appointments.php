<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model {

    protected $table = 'appointments';

    protected $fillable = ['services_id','payments_id','boat_id','start','end'];



}
