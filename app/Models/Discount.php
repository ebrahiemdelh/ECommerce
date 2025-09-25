<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'code',
        'percent',
        'valid_from',
        'valid_until',
        'usage_limit',
        'times_used',
    ];
}
