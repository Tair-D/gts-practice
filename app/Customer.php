<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    
    protected $fillable = [
        'name', 'last_name', 'birth_date',
    ];
}
