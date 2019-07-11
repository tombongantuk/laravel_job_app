<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Job extends Model
{
    protected $fillable=[
        'job_name','details'
    ];

    public function users(){
        return $this->belongsToMany('App\User','user_job');
    }
}
