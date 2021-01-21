<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BecomeAMember extends Model
{
    protected $table = 'become_a_member';
    protected $fillable = [
        'member_id', 'first_name', 'last_name', 'email', 'phone', 'address', 'ipaddress', 'membership_package', 'duration', 'marketer_name', 'paymentMethod','hearAbout', 'hearAboutOther','amount'
    ];

    public function product_category()
    {
        return $this->hasMany(ProductCategory::class);
    }
}
