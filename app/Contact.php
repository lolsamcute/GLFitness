<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'contacts';
    protected $fillable = [
        'first_name', 'last_name', 'nominator_first',
        'nominator_last', 'nominator_email', 'phone', 'email', 'state',
         'deals_closed', 'dollar_volume',
         'commissions_earned', 'community_builder', 'award_type'
    ];
}
