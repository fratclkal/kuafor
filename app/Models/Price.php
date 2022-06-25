<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = "prices";

    protected $fillable = [
        'shaved_price',
        'shaved_name'
    ];

    protected $guarded = [
        'id'
    ];
}
