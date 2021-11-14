<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id_service';
    protected $table ='services';
    protected $fillable = [
        'servicename',
        'detail',
        'image',
        'id_admin'      
    ];
}
