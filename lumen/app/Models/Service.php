<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "Services";

    protected $fillable = [
        'status',
        'description',
    ];
}
