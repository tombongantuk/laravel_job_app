<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Job;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','birth','password',
    ];

    // protected $guarded=[
    //       'ktp','alamat','pendidikan','skill','hobi','no_hp'];
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
    public function jobs(){
        return $this->belongsToMany('App\Job','user_job')->withPivot('status','description');
    }
    public function userDetail(){
        return $this->hasOne('App\UserDetail');
    }
    public function fileCV(){
        return $this->hasOne('App\FileCv');
    }

    /** 
     * @param string|array $roles 
     */ 
    public function authorizeRoles($roles) { 
        if (is_array($roles)) { 
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized.'); 
        } 
        return $this->hasRole($roles) || abort(401, 'This action is unauthorized.'); 
    }
    /** 
     * Check multiple roles 
     * @param array $roles 
     */ 
    public function hasAnyRole($roles) { 
        return null !== $this->roles()->whereIn('name',$roles)->first();
    }

    /** 
    * Check one role 
    * @param string $role 
    */ 
    public function hasRole($role) { 
        return null !== $this->roles()->where('name',$role)->first(); 
    }
}
