<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'country_code',
        'image_url',
        'role',
        'password',
    ];
}
