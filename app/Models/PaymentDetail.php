<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $fillable = [
        'order_id',
        'user_id',
        'payment_method',
        'amount',
        'transaction_id',
        'type',
        'status',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
