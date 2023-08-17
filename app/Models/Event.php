<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date', 'time', 'location', '_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
