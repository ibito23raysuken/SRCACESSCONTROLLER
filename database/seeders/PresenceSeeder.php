<?php

namespace Database\Seeders;

use App\Models\Presence;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Presence::create(
            [
            'etudiant_id'=>"1",
            'parcoure_id'=>"1",
            'matiere_id'=>"1",
            'jour'=>Carbon::now(),
            ]
        );
    }
}
