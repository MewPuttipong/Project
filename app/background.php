<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class background extends Model
{
    protected $table ='background';
    protected $fillable = [
        'image',
        'id_admin'      
    ];
}
