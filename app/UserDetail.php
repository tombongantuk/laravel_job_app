<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable=[
        'user_id','no_ktp','alamat','pendidikan','skill','no_hp'
    ];

    public function user(){
        
    }
}
