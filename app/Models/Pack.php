<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $fillable = [
        'pack_name',
        'pack_fees',
        'country_id',
        'currency_code',
    ];
    
}
