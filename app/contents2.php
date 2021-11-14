<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content2 extends Model
{
    protected $table ='content2';
    protected $fillable = [
        'contentname',
        'detail',
        'status',
        'id_admin'      
    ];
}
