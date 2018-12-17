<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'user_address_id',
        'order_method',
        'order_date',
        'status',
        'comment',
        'shipped_date'
    ];

    public function order_items()
    {
        return $this->belongsToMany('App\Model\OrderItem', 'order_items');
    }
}
