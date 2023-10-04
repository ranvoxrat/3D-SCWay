<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HotspotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotspots')->insert([
            [
                'id' => 1,
                'type' => 'scene',
                'pitch' => -7.0,
                'yaw' => -176.0,
                'info' => 'Entrance',
                'sourceScene' => 1,
                'targetScene' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'type' => 'scene',
                'pitch' => 1.0,
                'yaw' => 74.0,
                'info' => 'Waiting Shed',
                'sourceScene' => 1,
                'targetScene' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //exit
            [
                'id' => 3,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => 147.0,
                'info' => 'Building E',
                'sourceScene' => 2,
                'targetScene' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => -1.0,
                'info' => 'Exit',
                'sourceScene' => 2,
                'targetScene' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Building E
            [
                'id' => 5,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => -165.0,
                'info' => 'Building A',
                'sourceScene' => 3,
                'targetScene' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => 17.0,
                'info' => 'Exit',
                'sourceScene' => 3,
                'targetScene' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'type' => 'scene',
                'pitch' => -7.0,
                'yaw' => -67.0,
                'info' => 'Building E Hall',
                'sourceScene' => 3,
                'targetScene' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Building A
            [
                'id' => 8,
                'type' => 'scene',
                'pitch' => -10.0,
                'yaw' => -88.0,
                'info' => 'Exit',
                'sourceScene' => 4,
                'targetScene' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'type' => 'scene',
                'pitch' => 5.0,
                'yaw' => 112.0,
                'info' => 'Building B',
                'sourceScene' => 4,
                'targetScene' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'type' => 'scene',
                'pitch' => -16.0,
                'yaw' => -91.0,
                'info' => 'Building E',
                'sourceScene' => 4,
                'targetScene' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 17.0,
                'info' => 'Building A Hall',
                'sourceScene' => 4,
                'targetScene' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //buildingB
            [
                'id' => 12,
                'type' => 'scene',
                'pitch' => -9.0,
                'yaw' => 167.0,
                'info' => 'Waiting Area',
                'sourceScene' => 5,
                'targetScene' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 78.0,
                'info' => 'Infirmary',
                'sourceScene' => 5,
                'targetScene' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'type' => 'scene',
                'pitch' => 0.0,
                'yaw' => 76.0,
                'info' => 'Building C',
                'sourceScene' => 5,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => -108.0,
                'info' => 'Building A',
                'sourceScene' => 5,
                'targetScene' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => -3.0,
                'info' => 'Building B Hall',
                'sourceScene' => 5,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            //building C 6
            [
                'id' => 17,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => -146.0,
                'info' => 'Activity Center',
                'sourceScene' => 6,
                'targetScene' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'type' => 'scene',
                'pitch' => -4.0,
                'yaw' => -123.0,
                'info' => 'Infirmary',
                'sourceScene' => 6,
                'targetScene' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'type' => 'scene',
                'pitch' => -4.0,
                'yaw' => -123.0,
                'info' => 'Building C Hall',
                'sourceScene' => 6,
                'targetScene' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 82.0,
                'info' => 'Building D Hall',
                'sourceScene' => 6,
                'targetScene' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //building D 7
            [
                'id' => 21,
                'type' => 'scene',
                'pitch' => 0.0,
                'yaw' => 5.0,
                'info' => 'Building C',
                'sourceScene' => 7,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 79.0,
                'info' => 'Building C',
                'sourceScene' => 7,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Activity
            [
                'id' => 23,
                'type' => 'scene',
                'pitch' => 3.0,
                'yaw' => 90.0,
                'info' => 'Building C',
                'sourceScene' => 33,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //building E hall hotspots '3'
            [
                'id' => 24,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => 93.0,
                'info' => 'Building E',
                'sourceScene' => 11,
                'targetScene' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => -177.0,
                'info' => 'Building E Hall',
                'sourceScene' => 11,
                'targetScene' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => -167.0,
                'info' => 'Building E Room 101',
                'sourceScene' => 11,
                'targetScene' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'type' => 'scene',
                'pitch' => -21.0,
                'yaw' => -45.0,
                'info' => 'Building E Room 102',
                'sourceScene' => 11,
                'targetScene' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 28,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => 1.0,
                'info' => 'Building E Hall', //ehall3
                'sourceScene' => 11,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => -7.0,
                'info' => 'Building E Room 103',
                'sourceScene' => 11,
                'targetScene' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ehall2 hotspot
            [
                'id' => 30,
                'type' => 'scene',
                'pitch' => -28.0,
                'yaw' => 124.0,
                'info' => 'Building E Second Floor Hall', //ehall3
                'sourceScene' => 12,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 31,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => 168.0,
                'info' => 'Building E Hall', //ehall3
                'sourceScene' => 12,
                'targetScene' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ehall3 hotspots
            [
                'id' => 32,
                'type' => 'scene',
                'pitch' => -10.0,
                'yaw' => -57.0,
                'info' => 'Building E Second Floor Hall', //ehall3
                'sourceScene' => 13,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 174.0,
                'info' => 'Building E Hall', //ehall3
                'sourceScene' => 13,
                'targetScene' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => -174.0,
                'info' => 'Building E Room 103', 
                'sourceScene' => 13,
                'targetScene' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall
            [
                'id' => 35,
                'type' => 'scene',
                'pitch' => -35.0,
                'yaw' => 71.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 14,
                'targetScene' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 36,
                'type' => 'scene',
                'pitch' => -8.0,
                'yaw' => 177.0,
                'info' => 'Building E Second Floor Hall',
                'sourceScene' => 14,
                'targetScene' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'type' => 'scene',
                'pitch' => -20.0,
                'yaw' => 127.0,
                'info' => 'Building E Hall Room 201', 
                'sourceScene' => 14,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall2 
            [
                'id' => 38,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => -157.0,
                'info' => 'Building E Hall Room 201', 
                'sourceScene' => 15,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 39,
                'type' => 'scene',
                'pitch' => -24.0,
                'yaw' => -37.0,
                'info' => 'Building E Hall Room 202', 
                'sourceScene' => 15,
                'targetScene' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 40,
                'type' => 'scene',
                'pitch' => -12.0,
                'yaw' => 11.0,
                'info' => 'Building E Hall Second Floor Hall', 
                'sourceScene' => 15,
                'targetScene' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 41,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => 3.0,
                'info' => 'Building E Hall Room 203', 
                'sourceScene' => 15,
                'targetScene' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall3
            [
                'id' => 42,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => -160.0,
                'info' => 'Building E Hall Room 203', 
                'sourceScene' => 16,
                'targetScene' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 43,
                'type' => 'scene',
                'pitch' => -9.0,
                'yaw' => -169.0,
                'info' => 'Building E Second Floor Hall', 
                'sourceScene' => 16,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'type' => 'scene',
                'pitch' => -41.0,
                'yaw' => -73.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ahall
            [
                'id' => 45,
                'type' => 'scene',
                'pitch' => -4.0,
                'yaw' => 109.0,
                'info' => 'Building A Second Floor Hall', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ]);
    }
}
