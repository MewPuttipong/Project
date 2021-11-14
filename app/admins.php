<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $table ='admin';
    protected $fillable = [
        'adminname',
        'image',
        'email',  
    ];
}
