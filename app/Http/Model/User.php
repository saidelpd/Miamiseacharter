<?php namespace App\Http\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first', 'last', 'email','phone','roles_id','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    public function scopeGuess($query)
    {
       $query->where('roles_id',4);
    }

    public function scopeSalesDepartment($query)
    {
        $query->where(function($q){
            $q->where('roles_id',3)->orWhere('roles_id',2);
        });
    }

    public function scopeVendor($query)
    {
        $query->where('roles_id',3);
    }

    public function scopeConcierge($query)
    {
        $query->where('roles_id',2);
    }

    public function scopeAdmin($query)
    {
        $query->where('roles_id',1);
    }

    public function getName()
    {
        return $this->attributes['first']." ".$this->attributes['last'];
    }

    /**
     * @return User Commission
     */
    public function commission()
    {
        return $this->hasOne('App\Http\Model\Commission','user_id','id');
    }

}
