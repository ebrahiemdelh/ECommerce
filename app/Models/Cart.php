<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cart extends Model
{
    use HasUuids;
    protected $fillable = [
        'cookie_id',
        'user_id',
        'product_id',
        'quantity',
        'price',
        'options',
    ];

    // Mutators


    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest',
        ]);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
