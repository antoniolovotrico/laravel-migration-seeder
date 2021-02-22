<?php

use App\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                'title' => 'Hot Space',
                'artist' => 'Queen',
                'genre' => 'Pop',
                'year' => '1981'
            ],
            [
                'title' => 'Holy Land',
                'artist' => 'Angra',
                'genre' => 'Metal',
                'year' => '1996'
            ],
            [
                'title' => 'Favourite Worst Nightmare',
                'artist' => 'Arctic Monkeys',
                'genre' => 'Indie',
                'year' => '2007'
            ]
        ];
        foreach ($albums as $album) {
            $newAlbum = new Album();
            $newAlbum -> title = $album['title'];
            $newAlbum -> artist = $album['artist'];
            $newAlbum -> genre = $album['genre'];
            $newAlbum -> year = $album['year'];
            $newAlbum ->save();
        }
    }
}
