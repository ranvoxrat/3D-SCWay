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
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Building A
            [
                'id' => 8,
                'type' => 'scene',
                'pitch' => 0.0,
                'yaw' => 150.0,
                'info' => 'Campus Yard',
                'sourceScene' => 4,
                'targetScene' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
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
                'id' => 10,
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
                'id' => 11,
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
                'id' => 12,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 17.0,
                'info' => 'Building A Hall',
                'sourceScene' => 4,
                'targetScene' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //buildingB
            [
                'id' => 13,
                'type' => 'scene',
                'pitch' => -9.0,
                'yaw' => 167.0,
                'info' => 'Campus Yard',
                'sourceScene' => 5,
                'targetScene' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 78.0,
                'info' => 'Infirmary',
                'sourceScene' => 5,
                'targetScene' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
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
                'id' => 16,
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
                'id' => 17,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => -3.0,
                'info' => 'Building B Hall',
                'sourceScene' => 5,
                'targetScene' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            //building C 6
            [
                'id' => 18,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => -146.0,
                'info' => 'Activity Center',
                'sourceScene' => 6,
                'targetScene' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'type' => 'scene',
                'pitch' => -4.0,
                'yaw' => -123.0,
                'info' => 'Infirmary',
                'sourceScene' => 6,
                'targetScene' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'type' => 'scene',
                'pitch' => -4.0,
                'yaw' => -123.0,
                'info' => 'Building C Hall',
                'sourceScene' => 6,
                'targetScene' => 47,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 82.0,
                'info' => 'Building D',
                'sourceScene' => 6,
                'targetScene' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //building D 7
            [
                'id' => 22,
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
                'id' => 23,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 79.0,
                'info' => 'Building D Room 101',
                'sourceScene' => 7,
                'targetScene' => 71,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 126.0,
                'info' => 'Building D Room 102',
                'sourceScene' => 7,
                'targetScene' => 72,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'type' => 'scene',
                'pitch' => 18.0,
                'yaw' => 76.0,
                'info' => 'Building D Room 201',
                'sourceScene' => 7,
                'targetScene' => 73,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'type' => 'scene',
                'pitch' => 16.0,
                'yaw' => 128.0,
                'info' => 'Building D Room 202',
                'sourceScene' => 7,
                'targetScene' => 74,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Activity
            [
                'id' => 27,
                'type' => 'scene',
                'pitch' => 3.0,
                'yaw' => 90.0,
                'info' => 'Building C',
                'sourceScene' => 10,
                'targetScene' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //ehall1
            [
                'id' => 28,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => 93.0,
                'info' => 'Building E',
                'sourceScene' => 14,
                'targetScene' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => -177.0,
                'info' => 'Building E Hall',//ehall2
                'sourceScene' => 14,
                'targetScene' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 30,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => -167.0,
                'info' => 'Building E Room 101',
                'sourceScene' => 14,
                'targetScene' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 31,
                'type' => 'scene',
                'pitch' => -21.0,
                'yaw' => -45.0,
                'info' => 'Building E Room 102',
                'sourceScene' => 14,
                'targetScene' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 32,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => 1.0,
                'info' => 'Building E Hall', //ehall3
                'sourceScene' => 14,
                'targetScene' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => -7.0,
                'info' => 'Building E Room 103',
                'sourceScene' => 14,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ehall2 hotspot
            [
                'id' => 34,
                'type' => 'scene',
                'pitch' => -28.0,
                'yaw' => 124.0,
                'info' => 'Building E Second Floor Hall', //e2hall
                'sourceScene' => 15,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => 168.0,
                'info' => 'Building E Hall', //ehall3
                'sourceScene' => 15,
                'targetScene' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ehall3 hotspots
            [
                'id' => 36,
                'type' => 'scene',
                'pitch' => -10.0,
                'yaw' => -57.0,
                'info' => 'Building E Second Floor Hall', //e2hall
                'sourceScene' => 16,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'type' => 'scene',
                'pitch' => -3.0,
                'yaw' => 174.0,
                'info' => 'Building E Hall', //ehall
                'sourceScene' => 16,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => -174.0,
                'info' => 'Building E Room 103', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e101
            [
                'id' => 39,
                'type' => 'scene',
                'pitch' => -8.0,
                'yaw' => -13.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 11,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e102
            [
                'id' => 40,
                'type' => 'scene',
                'pitch' => -10.0,
                'yaw' => 130.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 12,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e103
            [
                'id' => 41,
                'type' => 'scene',
                'pitch' => -2.0,
                'yaw' => 166.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 13,
                'targetScene' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall 17
            [
                'id' => 42,
                'type' => 'scene',
                'pitch' => -35.0,
                'yaw' => 71.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 17,
                'targetScene' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 43,
                'type' => 'scene',
                'pitch' => -8.0,
                'yaw' => 177.0,
                'info' => 'Building E Second Floor Hall', //e2hall2
                'sourceScene' => 17,
                'targetScene' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'type' => 'scene',
                'pitch' => -20.0,
                'yaw' => 127.0,
                'info' => 'Building E Hall Room 201', 
                'sourceScene' => 17,
                'targetScene' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall2 18
            [
                'id' => 45,
                'type' => 'scene',
                'pitch' => -1.0,
                'yaw' => -157.0,
                'info' => 'Building E Hall Room 201', 
                'sourceScene' => 18,
                'targetScene' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 46,
                'type' => 'scene',
                'pitch' => -24.0,
                'yaw' => -37.0,
                'info' => 'Building E Hall Room 202', 
                'sourceScene' => 18,
                'targetScene' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 47,
                'type' => 'scene',
                'pitch' => -12.0,
                'yaw' => 11.0,
                'info' => 'Building E Hall Second Floor Hall', 
                'sourceScene' => 18,
                'targetScene' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 48,
                'type' => 'scene',
                'pitch' => -6.0,
                'yaw' => 3.0,
                'info' => 'Building E Hall Room 203', 
                'sourceScene' => 18,
                'targetScene' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e2hall3
            [
                'id' => 49,
                'type' => 'scene',
                'pitch' => -5.0,
                'yaw' => -160.0,
                'info' => 'Building E Hall Room 203', 
                'sourceScene' => 19,
                'targetScene' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'type' => 'scene',
                'pitch' => -9.0,
                'yaw' => -169.0,
                'info' => 'Building E Second Floor Hall', 
                'sourceScene' => 19,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'type' => 'scene',
                'pitch' => -41.0,
                'yaw' => -73.0,
                'info' => 'Building E Hall', 
                'sourceScene' => 19,
                'targetScene' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e201
            [
                'id' => 52,
                'type' => 'scene',
                'pitch' => -11.0,
                'yaw' => 129.0,
                'info' => 'Building E Hall Second Floor Hall', 
                'sourceScene' => 20,
                'targetScene' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e202
            [
                'id' => 53,
                'type' => 'scene',
                'pitch' => -10.0,
                'yaw' => 134.0,
                'info' => 'Building E Hall Second Floor Hall', 
                'sourceScene' => 21,
                'targetScene' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //e203
            [
                'id' => 54,
                'type' => 'scene',
                'pitch' => -11.0,
                'yaw' => 137.0,
                'info' => 'Building E Hall Second Floor Hall', 
                'sourceScene' => 22,
                'targetScene' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //ahall
            [
                'id' => 55,
                'type' => 'scene',
                'pitch' => -23.0,
                'yaw' => 113.0,
                'info' => 'Student Council Office', 
                'sourceScene' => 1,
                'targetScene' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()   
            ],
            [
                'id' => 56,
                'type' => 'scene',
                'pitch' => -4,
                'yaw' => 109,
                'info' => 'Building A Second Floor Hall', 
                'sourceScene' => 23,
                'targetScene' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 57,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => 74,
                'info' => 'Mock Hotel Lab', 
                'sourceScene' => 1,
                'targetScene' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 58,
                'type' => 'scene',
                'pitch' => -20,
                'yaw' => 4,
                'info' => 'Building A', 
                'sourceScene' => 23,
                'targetScene' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a2Hall
            [
                'id' => 59,
                'type' => 'scene',
                'pitch' => -33,
                'yaw' => 145,
                'info' => 'Building A Third Floor Hall', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 60,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => 153,
                'info' => 'Building Hall', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 61,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => 170,
                'info' => 'Second Floor', 
                'sourceScene' => 16,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a2Hall2
            [
                'id' => 62,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -175,
                'info' => 'Building A Second Floor Hall', 
                'sourceScene' => 24,
                'targetScene' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 63,
                'type' => 'scene',
                'pitch' => -16,
                'yaw' => 150,
                'info' => 'Building A Room 215', 
                'sourceScene' => 24,
                'targetScene' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 64,
                'type' => 'scene',
                'pitch' => -23,
                'yaw' => -133,
                'info' => 'Building A Room 216', 
                'sourceScene' => 24,
                'targetScene' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 65,
                'type' => 'scene',
                'pitch' => -15,
                'yaw' => -11,
                'info' => 'Room 217', 
                'sourceScene' => 24,
                'targetScene' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a215
            [
                'id' => 66,
                'type' => 'scene',
                'pitch' => -14,
                'yaw' => 56,
                'info' => 'Building A Second Floor Hall', 
                'sourceScene' => 28,
                'targetScene' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a216
            [
                'id' => 67,
                'type' => 'scene',
                'pitch' => -14,
                'yaw' => 177,
                'info' => 'Building A Second Floor Hall', 
                'sourceScene' => 30,
                'targetScene' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a217
            [
                'id' => 68,
                'type' => 'scene',
                'pitch' => -13,
                'yaw' => -107,
                'info' => 'Second Floor Hall', 
                'sourceScene' => 31,
                'targetScene' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a3Hall
            [
                'id' => 69,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => -176,
                'info' => 'Building A Third Floor Hall', 
                'sourceScene' => 26,
                'targetScene' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a3hall2
            [
                'id' => 70,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => 26,
                'info' => 'Building A Room 312', 
                'sourceScene' => 27,
                'targetScene' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 71,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 165,
                'info' => 'Building A Room 313', 
                'sourceScene' => 26,
                'targetScene' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a312
            [
                'id' => 72,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => 120,
                'info' => 'Building A Third Floor Hall', 
                'sourceScene' => 31,
                'targetScene' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a313
            [
                'id' => 73,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => 26,
                'info' => 'Building A Third Floor Hall', 
                'sourceScene' => 32,
                'targetScene' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //bhall
            [
                'id' => 74,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => 163,
                'info' => 'Building B Hall', 
                'sourceScene' => 33,
                'targetScene' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 75,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => -17,
                'info' => 'Building B Hall', 
                'sourceScene' => 33,
                'targetScene' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 76,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => 31,
                'info' => 'Building B', 
                'sourceScene' => 33,
                'targetScene' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //bhall2
            [
                'id' => 77,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => 10,
                'info' => 'Building B Hall', 
                'sourceScene' => 34,
                'targetScene' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //bhall3
            [
                'id' => 78,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -9,
                'info' => 'Building C Hall', 
                'sourceScene' => 35,
                'targetScene' => 48,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 79,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -9,
                'info' => 'Building B Hall', 
                'sourceScene' => 35,
                'targetScene' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 80,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -9,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 35,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b2hall
            [
                'id' => 81,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => -176,
                'info' => 'Building B Hall', 
                'sourceScene' => 36,
                'targetScene' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 82,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => 176,
                'info' => 'Building B Room 206', 
                'sourceScene' => 36,
                'targetScene' => 38,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 83,
                'type' => 'scene',
                'pitch' => -11,
                'yaw' => 170,
                'info' => 'Building B Room 205', 
                'sourceScene' => 36,
                'targetScene' => 39,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 84,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => 19,
                'info' => 'Building B Room 204', 
                'sourceScene' => 36,
                'targetScene' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 85,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => 8,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 36,
                'targetScene' => 37,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 86,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => -176,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 36,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b2hall2
            [
                'id' => 87,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => -174,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 37,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 88,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => 12,
                'info' => 'Building B Room 203', 
                'sourceScene' => 37,
                'targetScene' => 41,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //206
            [
                'id' => 89,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 178,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 38,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //205
            [
                'id' => 90,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 178,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 39,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //204
            [
                'id' => 91,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => 137,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 40,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //203
            [
                'id' => 92,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => 140,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 41,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b3hall
            [
                'id' => 93,
                'type' => 'scene',
                'pitch' => -4,
                'yaw' => -21,
                'info' => 'Building B Second Floor Hall', 
                'sourceScene' => 42,
                'targetScene' => 36,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 94,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => -27,
                'info' => 'Building B Room 306', 
                'sourceScene' => 42,
                'targetScene' => 44,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 95,
                'type' => 'scene',
                'pitch' => -27,
                'yaw' => -146,
                'info' => 'Building B Room 304', 
                'sourceScene' => 42,
                'targetScene' => 45,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 96,
                'type' => 'scene',
                'pitch' => -27,
                'yaw' => -146,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 42,
                'targetScene' => 43,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b3hall2
            [
                'id' => 97,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => -3,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 43,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 98,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => -3,
                'info' => 'Building B Room 304', 
                'sourceScene' => 43,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b306
            [
                'id' => 99,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 33,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 44,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b304
            [
                'id' => 100,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => 53,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 45,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b301
            [
                'id' => 101,
                'type' => 'scene',
                'pitch' => -4,
                'yaw' => 68,
                'info' => 'Building B Third Floor Hall', 
                'sourceScene' => 46,
                'targetScene' => 42,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //chall
            [
                'id' => 102,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => 6,
                'info' => 'Building C Hall', 
                'sourceScene' => 47,
                'targetScene' => 48,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 103,
                'type' => 'scene',
                'pitch' => -0,
                'yaw' => -173,
                'info' => 'Building C Hall', 
                'sourceScene' => 47,
                'targetScene' => 49,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //chall2
            [
                'id' => 104,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => 6,
                'info' => 'Building C Hall', 
                'sourceScene' => 48,
                'targetScene' => 47,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 105,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => -174,
                'info' => 'Building B Hall', 
                'sourceScene' => 48,
                'targetScene' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 106,
                'type' => 'scene',
                'pitch' => -11,
                'yaw' => -66,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 48,
                'targetScene' => 55,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //chall3
            [
                'id' => 107,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => 29,
                'info' => 'Building C Hall', 
                'sourceScene' => 49,
                'targetScene' => 47,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 108,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => 54,
                'info' => 'Building C Room 107', 
                'sourceScene' => 49,
                'targetScene' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 109,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => 29,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 49,
                'targetScene' => 51,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c107
            [
                'id' => 110,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 149,
                'info' => 'Building C Hall', 
                'sourceScene' => 50,
                'targetScene' => 47,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c2hall
            [
                'id' => 111,
                'type' => 'scene',
                'pitch' => -26,
                'yaw' => -76,
                'info' => 'Building C Hall', 
                'sourceScene' => 51,
                'targetScene' => 49,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 112,
                'type' => 'scene',
                'pitch' => -6,
                'yaw' => -108,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 51,
                'targetScene' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 113,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => 176,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 51,
                'targetScene' => 52,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c2hall2
            [
                'id' => 114,
                'type' => 'scene',
                'pitch' => -3,
                'yaw' => 12,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 52,
                'targetScene' => 53,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 115,
                'type' => 'scene',
                'pitch' => -25,
                'yaw' => 68,
                'info' => 'Building C Room 210', 
                'sourceScene' => 52,
                'targetScene' => 58,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 116,
                'type' => 'scene',
                'pitch' => -30,
                'yaw' => 137,
                'info' => 'Building C Room 211', 
                'sourceScene' => 52,
                'targetScene' => 59,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 117,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => -167,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 52,
                'targetScene' => 51,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c2hall3
            [
                'id' => 118,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -3,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 53,
                'targetScene' => 54,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 119,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -3,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 53,
                'targetScene' => 52,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 120,
                'type' => 'scene',
                'pitch' => -36,
                'yaw' => 122,
                'info' => 'Building C Room 209', 
                'sourceScene' => 53,
                'targetScene' => 57,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 121,
                'type' => 'scene',
                'pitch' => -35,
                'yaw' => 48,
                'info' => 'Building C Room 208', 
                'sourceScene' => 53,
                'targetScene' => 56,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c2hall4
            [
                'id' => 122,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => -80,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 54,
                'targetScene' => 53,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 123,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => 3,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 54,
                'targetScene' => 64,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 124,
                'type' => 'scene',
                'pitch' => -21,
                'yaw' => -29,
                'info' => 'Building C Hall', 
                'sourceScene' => 54,
                'targetScene' => 48,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 125,
                'type' => 'scene',
                'pitch' => -20,
                'yaw' => 55,
                'info' => 'Building C Room 207', 
                'sourceScene' => 54,
                'targetScene' => 55,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c207
            [
                'id' => 126,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => 32,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 55,
                'targetScene' => 54,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c208
            [
                'id' => 127,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => -37,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 56,
                'targetScene' => 53,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c209
            [
                'id' => 128,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => -57,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 57,
                'targetScene' => 53,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c210
            [
                'id' => 129,
                'type' => 'scene',
                'pitch' => -7,
                'yaw' => -47,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 58,
                'targetScene' => 52,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c211
            [
                'id' => 130,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => -145,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 59,
                'targetScene' => 52,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3hall
            [
                'id' => 131,
                'type' => 'scene',
                'pitch' => -28,
                'yaw' => -102,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 60,
                'targetScene' => 51,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 132,
                'type' => 'scene',
                'pitch' => -5,
                'yaw' => 179,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 60,
                'targetScene' => 61,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3hall2
            [
                'id' => 133,
                'type' => 'scene',
                'pitch' => -4,
                'yaw' => 175,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 61,
                'targetScene' => 62,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 134,
                'type' => 'scene',
                'pitch' => -1,
                'yaw' => -5,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 61,
                'targetScene' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 135,
                'type' => 'scene',
                'pitch' => -1,
                'yaw' => -5,
                'info' => 'Building C Social Hall', 
                'sourceScene' => 61,
                'targetScene' => 67,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 136,
                'type' => 'scene',
                'pitch' => -26,
                'yaw' => -130,
                'info' => 'Building C Social Hall', 
                'sourceScene' => 61,
                'targetScene' => 66,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3hall3
            [
                'id' => 137,
                'type' => 'scene',
                'pitch' => 0,
                'yaw' => -166,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 62,
                'targetScene' => 63,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 138,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => 14,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 62,
                'targetScene' => 61,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 139,
                'type' => 'scene',
                'pitch' => -36,
                'yaw' => -31,
                'info' => 'Building C Social Hall', 
                'sourceScene' => 62,
                'targetScene' => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 140,
                'type' => 'scene',
                'pitch' => -40,
                'yaw' => -119,
                'info' => 'Building C Room 309', 
                'sourceScene' => 62,
                'targetScene' => 68,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3hall4
            [
                'id' => 141,
                'type' => 'scene',
                'pitch' => -2,
                'yaw' => -178,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 63,
                'targetScene' => 64,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 142,
                'type' => 'scene',
                'pitch' => -1,
                'yaw' => 0,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 63,
                'targetScene' => 62,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 143,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => -12,
                'info' => 'Building C Room 309', 
                'sourceScene' => 63,
                'targetScene' => 68,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 144,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => -18,
                'info' => 'Building C Room 308', 
                'sourceScene' => 63,
                'targetScene' => 69,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 145,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => -166,
                'info' => 'Building C Room 307', 
                'sourceScene' => 63,
                'targetScene' => 70,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3hall5
            [
                'id' => 146,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => 5,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 64,
                'targetScene' => 63,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 147,
                'type' => 'scene',
                'pitch' => -20,
                'yaw' => 76,
                'info' => 'Building C Second Floor Hall', 
                'sourceScene' => 64,
                'targetScene' => 54,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 148,
                'type' => 'scene',
                'pitch' => -16,
                'yaw' => -15,
                'info' => 'Building C Room 307', 
                'sourceScene' => 64,
                'targetScene' => 70,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //s1
            [
                'id' => 149,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => -21,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 65,
                'targetScene' => 61,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //s2
            [
                'id' => 150,
                'type' => 'scene',
                'pitch' => -8,
                'yaw' => 55,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 66,
                'targetScene' => 61,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //s3
            [
                'id' => 151,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => 127,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 67,
                'targetScene' => 62,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c309
            [
                'id' => 152,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => -21,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 68,
                'targetScene' => 63,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c308
            [
                'id' => 153,
                'type' => 'scene',
                'pitch' => -13,
                'yaw' => 51,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 69,
                'targetScene' => 63,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c307
            [
                'id' => 154,
                'type' => 'scene',
                'pitch' => -15,
                'yaw' => 56,
                'info' => 'Building C Third Floor Hall', 
                'sourceScene' => 70,
                'targetScene' => 63,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            //d101
            [
                'id' => 155,
                'type' => 'scene',
                'pitch' => -11,
                'yaw' => 136,
                'info' => 'Building D', 
                'sourceScene' => 71,
                'targetScene' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //d102
            [
                'id' => 156,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => -39,
                'info' => 'Building D', 
                'sourceScene' => 72,
                'targetScene' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //d201
            [
                'id' => 157,
                'type' => 'scene',
                'pitch' => -10,
                'yaw' => -50,
                'info' => 'Building D', 
                'sourceScene' => 73,
                'targetScene' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //d202
            [
                'id' => 158,
                'type' => 'scene',
                'pitch' => -9,
                'yaw' => -47,
                'info' => 'Building D', 
                'sourceScene' => 74,
                'targetScene' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
