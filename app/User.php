<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

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


    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    /**
     * Check whether user has role assigned or not
     *
     * return bool
     */
    public function hasRole($role){

        if(is_string($role)){
            return $this->roles->contains('name', $role);
        }

        foreach($role as $singleRole){
            if($this->hasRole($singleRole->name)){
                return true;
            }

        }

        return false;

    }


}
