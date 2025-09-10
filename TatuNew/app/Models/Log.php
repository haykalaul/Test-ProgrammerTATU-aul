<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'daily_logs';
    use HasFactory;
    protected $fillable = [
        'log_date',
        'description',
        'status',
        'name',
        'note',
    ];
    protected $casts = [
        'log_date' => 'date',
        'verified_at' => 'datetime',
    ];
}
