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
            'competition' => '',
            'limit' => 00,
            'cp1' => "",
            'cp1_line' => "",
            'cp1_wa' => "",
            'cp2' => "",
            'cp2_line' => "",
            'cp2_wa' => "",
        ]);
    }
}
