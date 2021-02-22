<?php

use Faker\Generator as Faker;
use App\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10; $i++){
            $newArtist = new Artist();
            $newArtist -> name = $faker -> word();
            $newArtist -> save();
        }
    }
}
