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
        // estraggo dal database (config\comics.php) l'array di dati creando una variabile
        $comics_db = config('comics');
        //dump visibile con:  php artisan db:seed --class=ComicSeeder
        dump($comics_db);

        // creo ciclo foreach per poter seeddare la table sul server ogni elemento contenuto nell'array
        foreach ($comics_db as $comic) {
            $new_comic = new Comic();
            $new_comic->
        }
    }
}
