<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'school',
        'degree',
        'field',
        'description',
        'start_date',
        'end_date',
        'current',
        'order'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'current' => 'boolean'
    ];

    public function scopeCurrent($query)
    {
        return $query->where('current', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
