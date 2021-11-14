<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $table ='homepage';
    protected $fillable = [
        'id_service',
        'id_bg',
        'id_admin'      
    ];
}
