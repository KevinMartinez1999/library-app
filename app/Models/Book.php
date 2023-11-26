<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model
{
    use HasFactory;

    public function auth()
    {
        return $this->belongsTo(Author::class);
    }

    public function scopeActiveBook(Builder $builder)
    {
        return $builder->where('status', 1);
    }
}

// Book::activeBook()->get(); // Esta es una forma de llamar al scope
