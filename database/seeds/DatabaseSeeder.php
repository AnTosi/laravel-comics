<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $comics = config('db.comics');

        foreach ($comics as $comic) {
            $_comic = new Comic;
            $_comic->title = $comic['title'];
            $_comic->description = $comic['description'];
            $_comic->thumb = $comic['thumb'];
            $_comic->price = $comic['price'];
            $_comic->series = $comic['series'];
            $_comic->save();
        }
    }
}
