<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Config;

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
	protected $fillable = [
		'firstname', 'email', 'password', 'lastname', 'phone', 'skype', 'referer_id'
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	protected $appends = ['full_name'];

	public function requisites() {
		return $this->hasMany('\App\Requisite');
	}

	public function transactions() {
		return $this->hasMany('\App\Transaction');
	}


	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany первого уровня нижний слой
	 */
	public function children()
	{
		return $this->hasMany('\App\User', 'referer_id', 'id');
	}

	public function parent() {
		return $this->hasOne('\App\User', 'id', 'referer_id');
	}

	public function isAdmin() {
		return $this->email == Config::get('constants.ADMIN_LOGIN');
	}

	public function fullName() {
		return $this->lastname . ' ' . $this->firstname;
	}

	public function getFullNameAttribute()
	{
		return $this->lastname . " " . $this->firstname;
	}



}
