<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = config('genre_db');
        foreach ($genres as $genre) {
            $newGenre = new Genre();
            $newGenre -> name = $genre['name'];
            $newGenre -> save();
        }
    }
}
