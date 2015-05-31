<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model {

    protected $table = 'services';

    protected $fillable = ['name','price','description','special_price'];

    public function times()
    {
        return $this->hasMany('App\Http\Model\ServicesTimes','services_id','id');
    }
    public function specialPrices()
    {
        return $this->hasMany('App\Http\Model\ServicesSpecialPrice','services_id','id');
    }


}
