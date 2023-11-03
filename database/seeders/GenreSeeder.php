<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['genre' => 'fantasy']);
        Genre::create(['genre' => 'advanture']);
        Genre::create(['genre' => 'romance']);
        Genre::create(['genre' => 'horror']);
        Genre::create(['genre' => 'comedy']);
        Genre::create(['genre' => 'angst']);
        Genre::create(['genre' => 'family']);
        Genre::create(['genre' => 'mystery']);
        Genre::create(['genre' => 'kingdom']);
        Genre::create(['genre' => 'action']);
        Genre::create(['genre' => 'history']);
        Genre::create(['genre' => 'education']);
        Genre::create(['genre' => 'biography']);
        Genre::create(['genre' => 'food']);
    }
}
