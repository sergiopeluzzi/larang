<?php

namespace Larang;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'responsilbe',
        'email',
        'address',
        'phone',
        'obs'
    ];
}
