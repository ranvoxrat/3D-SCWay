<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Rooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
           [
            'room_id' => 1,
            'title' => 'Room 101',
            'type' => 'Room',
            'image' => 'entrance.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
           ]
        ]);
    }
}
