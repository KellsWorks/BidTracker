<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    use HasFactory;

    protected $fillable = [
        'bid_number',
        'description',
        'date_published',
        'amount',
        'deadline',
        'lead'
    ];
}
