<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{   
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'toname',
        'tophoto',
        'content',
        'created_at',
        'read_at'
    ];

    public $timestamps = false;

    protected $date=['created_at','read_at'];

    public function from()
    {
        return $this->belongsTo(User::class , 'from');
    }

    
}
