<?php

namespace App\Models\User;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['profile_id','role_id' ,'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function profile()
    {
        return $this->hasOne('App\Models\User\Profile', 'id', 'profile_id');
    }
}
