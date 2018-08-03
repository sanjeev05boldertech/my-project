<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
	const ADMIN_TYPE = 'admin';
	const Booking_TYPE = 'booking';
	const DEFAULT_TYPE = 'customer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function isAdmin(){        
		return $this->type === self::ADMIN_TYPE;    
	}

	public function isBooking(){        
		return $this->type === self::Booking_TYPE;    
	}
}
