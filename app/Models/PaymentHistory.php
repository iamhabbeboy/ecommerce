<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    protected $table = 'payment_histories';

    protected $fillable = [
        'product_id',
        'customer_id',
        'total_amount',
        'product_price',
    ];
}
