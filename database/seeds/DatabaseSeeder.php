<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
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
        $this->call(UserSeeder::class);
        $this->call(SceneSeeder::class);
        $this->call(HotspotSeeder::class);
<<<<<<< HEAD
=======
        $this->call(Rooms::class);
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    }
}
