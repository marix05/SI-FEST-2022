<?php

namespace Database\Seeders;

use App\Models\ListCompetition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListCompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListCompetition::truncate();

        ListCompetition::create([
            'competition' => 'Photography',
            'limit' => 50,
            'cp1' => "Naura Tri Raihana",
            'cp1_line' => "naura2201",
            'cp1_wa' => "6282210143104",
            'cp2' => "Sapina Talita Aminisari",
            'cp2_line' => "sapinatalitaa",
            'cp2_wa' => "6281368183266",
        ]);
        ListCompetition::create([
            'competition' => 'BusinessPlan',
            'limit' => 50,
            'cp1' => "Sapina Talita Aminisari",
            'cp1_line' => "sapinatalitaa",
            'cp1_wa' => "6281368183266",
            'cp2' => "Syabilla Mutia Rahma",
            'cp2_line' => "syabilla26rahma",
            'cp2_wa' => "6287818532898",
        ]);
        ListCompetition::create([
            'competition' => 'UIUXDesign',
            'limit' => 50,
            'cp1' => "M. Mayda Ary Pratama",
            'cp1_line' => "aryyprtma",
            'cp1_wa' => "6281271646081",
            'cp2' => "Anne Trimaysella",
            'cp2_line' => "annetrimaysella03",
            'cp2_wa' => "6289624557205",
        ]);
        ListCompetition::create([
            'competition' => 'Valorant',
            'limit' => 32,
            'cp1' => "M. Fakhri Rizqullah",
            'cp1_line' => "fakhririzqullah8",
            'cp1_wa' => "6282288718325",
        ]);
        ListCompetition::create([
            'competition' => 'MobileLegends',
            'limit' => 32,
            'cp1' => "M. Aji Wijaya",
            'cp1_line' => "daichi_akir",
            'cp1_wa' => "6282175717290",
        ]);
    }
}
