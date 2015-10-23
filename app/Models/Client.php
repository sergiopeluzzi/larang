<?php

namespace Larang\Models;

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

    public function project()
    {
        return $this->hasMany(Project::class, 'client_id', 'id');
    }
}
