<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\AuthorProfile;
use App\Models\Book;
use App\Models\Editorial;
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
        
        // Crea 10 editoriales con 10 autores y que cada editorial tenga entre 1 y 5 autores
        Editorial::factory()->times(10)->create()->each(function (Editorial $editorial) {
            $editorial->authors()->attach(Author::all()->random(rand(1, 5))->pluck('id')->toArray());
        });
    }
}
