<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // estraggo dal database (config\comics.php) l'array associativo di dati creando una variabile
        $comics_db = config('comics');
        //dump visibile con:  php artisan db:seed --class=ComicSeeder
        // dump($comics_db);

        // creo ciclo foreach per poter seeddare la table sul server ogni elemento contenuto nell'array
        foreach ($comics_db as $comic) {
            // crep nuova istanza $new_comic
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->series = $comic['series'];
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->img = $comic['thumb'];

            // salvo i dati appena estratti dall'array nella table sql
            $new_comic->save();
        }
    }
}
