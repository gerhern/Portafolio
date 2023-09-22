<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Proyecto::factory(5)->create();
        Project::factory(5)->create();
        Technology::factory()->create([
            'name'=> '?',
            'url_image' => 'notec.svg'
        ]);
    }
}
