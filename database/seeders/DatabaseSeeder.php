<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CollectionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CollectionsSeeder::class,
        ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
