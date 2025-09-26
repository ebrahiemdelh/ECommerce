<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'country_code',
        'image_url',
        'password',
        'description',
    ];

    // Relationships
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, Store::class);
    }
}
