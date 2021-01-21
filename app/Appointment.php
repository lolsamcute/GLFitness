<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';
    protected $fillable = [
        'spa_id', 'full_name', 'email', 'phone', 'address', 'ipaddress', 'membership_package','sex', 'marketer_name','date'
    ];
}
