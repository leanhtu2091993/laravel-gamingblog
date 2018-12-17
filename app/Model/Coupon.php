<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupon';

    protected $fillable = [
        'name',
        'code',
        'type',
        'total',
        'exp_date',
        'sale_off',
        'condition'
    ];
}
