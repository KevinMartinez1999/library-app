<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function profile()
    {
        return $this->hasOne(AuthorProfile::class);
    }

    public function editorials()
    {
        return $this->belongsToMany(Editorial::class);
    }
}
