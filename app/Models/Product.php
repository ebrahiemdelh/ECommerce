<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'store_id',
        'name',
        'description',
        'price',
        'stock',
        'images',
        'rating',
        'rating_No',
    ];

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')->withPivot('quantity');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
