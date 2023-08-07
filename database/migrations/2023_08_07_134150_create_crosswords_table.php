<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crosswords', function (Blueprint $table) {
            $table->id();
            $table->string('answer', 10);
            $table->string('clue', 50);
            $table->tinyInteger('length')->unsigned();
            $table->date('date');
            $table->enum('direction', ['across', 'down']);
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('crosswords')->insert(
            array(
                [
                    "answer" => "SNOB",
                    "clue" => "Haughty person",
                    "length" => 4,
                    "date" => "2023-07-25",
                    "direction" => "across"
                ],
                [
                    "answer" => "ATONED",
                    "clue" => "Apologized for one's sins",
                    "length" => 6,
                    "date" => "2023-07-25",
                    "direction" => "across"
                ],
                [
                    "answer" => "PORTER",
                    "clue" => "Luggage carrier at a hotel",
                    "length" => 6,
                    "date" => "2023-07-25",
                    "direction" => "across"
                ],
                [
                    "answer" => "TUTORS",
                    "clue" => "One-on-one teachers",
                    "length" => 6,
                    "date" => "2023-07-25",
                    "direction" => "across"
                ],
                [
                    "answer" => "STEPS",
                    "clue" => "Studies recommend taking 8,000+ of these each day",
                    "length" => 5,
                    "date" => "2023-07-25",
                    "direction" => "across"
                ],
                [
                    "answer" => "STOUT",
                    "clue" => "Sturdy",
                    "length" => 5,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],
                [
                    "answer" => "NORTE",
                    "clue" => "Direction from Mexico to the U.S., en español",
                    "length" => 5,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],
                [
                    "answer" => "ONTOP",
                    "clue" => "Victorious",
                    "length" => 5,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],
                [
                    "answer" => "BEERS",
                    "clue" => "7-Across and 1-Down, by different meanings",
                    "length" => 5,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],
                [
                    "answer" => "APTS",
                    "clue" => "Many N.Y.C. dwellings: Abbr.",
                    "length" => 4,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],
                [
                    "answer" => "DRS",
                    "clue" => "Hosp. personnel",
                    "length" => 3,
                    "date" => "2023-07-25",
                    "direction" => "down"
                ],

                [
                    "answer" => "SNOB",
                    "clue" => "Haughty person",
                    "length" => 4,
                    "date" => "2023-07-26",
                    "direction" => "across"
                ],
                [
                    "answer" => "ATONED",
                    "clue" => "Apologized for one's sins",
                    "length" => 6,
                    "date" => "2023-07-26",
                    "direction" => "across"
                ],
                [
                    "answer" => "PORTER",
                    "clue" => "Luggage carrier at a hotel",
                    "length" => 6,
                    "date" => "2023-07-26",
                    "direction" => "across"
                ],
                [
                    "answer" => "TUTORS",
                    "clue" => "One-on-one teachers",
                    "length" => 6,
                    "date" => "2023-07-26",
                    "direction" => "across"
                ],
                [
                    "answer" => "STEPS",
                    "clue" => "Studies recommend taking 8,000+ of these each day",
                    "length" => 5,
                    "date" => "2023-07-26",
                    "direction" => "across"
                ],
                [
                    "answer" => "STOUT",
                    "clue" => "Sturdy",
                    "length" => 5,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
                [
                    "answer" => "NORTE",
                    "clue" => "Direction from Mexico to the U.S., en español",
                    "length" => 5,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
                [
                    "answer" => "ONTOP",
                    "clue" => "Victorious",
                    "length" => 5,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
                [
                    "answer" => "BEERS",
                    "clue" => "7-Across and 1-Down, by different meanings",
                    "length" => 5,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
                [
                    "answer" => "APTS",
                    "clue" => "Many N.Y.C. dwellings: Abbr.",
                    "length" => 4,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
                [
                    "answer" => "DRS",
                    "clue" => "Hosp. personnel",
                    "length" => 3,
                    "date" => "2023-07-26",
                    "direction" => "down"
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crosswords');
    }
};
