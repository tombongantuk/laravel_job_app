<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileCv extends Model
{
    protected $fillable=[
        'user_id','file'
    ];
}
