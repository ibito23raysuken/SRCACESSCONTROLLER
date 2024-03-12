<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Journal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journal::create(
            [
            'etudiant_id'=>"1",
            'parcoure_id'=>"1",
            'heure'=>Carbon::now(),
            'jour'=>Carbon::now(),
            ]
        );
    }
}
