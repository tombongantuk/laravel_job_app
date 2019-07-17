<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Job extends Model
{
    protected $fillable=[
        'company_name','company_address','job_name','details','requirement','salary'
    ];

    public function users(){
        return $this->belongsToMany('App\User','user_job')->withPivot('status');
    }
}
