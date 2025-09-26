<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $fillable = [
        'user_id',
        'card_number',
        'cardholder_name',
        'expiry_date',
        'cvv',
        'password',
        'status',
        'verified',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paymentDetails()
    {
        return $this->hasMany(PaymentDetail::class);
    }
}
