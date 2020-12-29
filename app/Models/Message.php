<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'from',
        'to',
        'content',
        'created_at',
        'read_at'
    ];
}
