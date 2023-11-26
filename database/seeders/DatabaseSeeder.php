<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\AuthorProfile;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea 10 autores con 10 perfiles y que cada autor tenga 5 libros
        Author::factory()->times(10)->create()->each(function (Author $author) {
            AuthorProfile::factory()->create(['author_id' => $author->id]);
            $author->books()->saveMany(Book::factory()->count(5)->make(['author_id' => $author->id]));
        });
    }
}
