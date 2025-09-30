<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cart extends Model
{
    use HasUuids;
    protected $fillable = [
        'user_id',
    ];

    // Mutators


    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, CartItem::class);
    }
}
