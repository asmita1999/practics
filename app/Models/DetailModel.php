<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailModel extends Model
{
    protected $table='detail';
    protected $fillable=[
        'name',
        'phone',
        'email',
        'is_active'
    ];
}
