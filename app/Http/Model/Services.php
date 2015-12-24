<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model {

    protected $table = 'services';

    protected $fillable = ['name','price','description','special_price','extra_services','image'];

    protected $casts = [
        'extra_services' => 'array',
    ];
    /**
     * Return Available time for the service
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function times()
    {
        return $this->hasMany('App\Http\Model\ServicesTimes','services_id','id');
    }

    /**
     * Return Special Price For this Service
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialPrices()
    {
        return $this->hasMany('App\Http\Model\ServicesSpecialPrice','services_id','id');
    }

    public function getImageAttribute($value)
    {
        return env('SERVICES_IMAGE_PATH').$value;
    }



}
