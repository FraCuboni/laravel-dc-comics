<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            // creo la comics table che poi migro su phpmyadmin
            $table->id();
            $table->string('title');
            $table->string('series');
            $table->text('description');
            $table->float('price');
            $table->string('thumb');
            $table->timestamps();


            // "title" => "Aquaman Vol. 4: Underworld",
            // "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
            // "thumb" => "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
            // "price" => "$16.99",
            // "series" => "Aquaman",
            // "sale_date" => "2018-01-24",
            // "type" => "graphic novel",
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
