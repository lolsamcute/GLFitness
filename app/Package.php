<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'packages';
    protected $fillable = [
        'name', 'amount', 'plans', 'status'
    ];
}
