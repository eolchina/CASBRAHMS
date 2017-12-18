<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use App\Notifications\ResetPassword;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Hash;

class User extends Authenticatable
{
    use Notifiable;
    use HasRolesAndAbilities;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'remember_token'];

    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }


    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    //
    // public static function boot()
    // {
    //     parent::boot();
    //
    //     static::creating(function ($user){
    //         $user->activation_token = str_random(30);
    //     });
    // }
    //
    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPassword($token));
    // }
}
