<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ServicesSpecialPrice extends Model {

    protected $table = 'services_special_price';
    protected $fillable = ['services_id','special_hour','special_price'];
    public $timestamps =false;

}
