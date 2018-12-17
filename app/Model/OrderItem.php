<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = [
        'order_id', 'product_id', 'stock'
    ];

    public function orders()
    {
        return $this->belongsTo('App\Model\Order', 'order_id', 'id');
    }
}
