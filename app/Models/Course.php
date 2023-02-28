<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function scopeLonger(Builder $query): void
    {
        $query->where('duration', '>', '1000');
    }

    public function scopeShorter(Builder $query): void
    {
        $query->where('duration', '<=', '1000');
    }
}
