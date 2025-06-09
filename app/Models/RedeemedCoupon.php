<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedeemedCoupon extends Model
{
    protected $table = 'redeemed_coupons';
    protected $primaryKey = 'redeemed_coupon_id';
}
