<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Movie::create([
            'title' => 'Spiderman: No Way Home',
            'description' => "With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.",
            'director' => 'Jon Watts',
            'released_dt' => '2021-12-15',
        ]);
    }
}
