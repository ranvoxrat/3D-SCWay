<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SceneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scenes')->insert([
            [
                'id' => 1,
                'title' => 'Gate Entrance',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 25.0,
                'yaw' => -176.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'entrance.jpg',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'title' => 'Gate Exit',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 137.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'exit.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'title' => 'Building E',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 3.0,
                'yaw' => -163.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'buildinge.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'title' => 'Building A',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 5.0,
                'yaw' => 116.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'buildinga.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'title' => 'Building B',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => 77.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'buildingb.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'title' => 'Building C',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => -116.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'buildingc.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'title' => 'Building D',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -1,
                'yaw' => 90,
                'horizonRoll' => -5.0,
                'horizonPitch'=> 9.0,
                'image' => 'buildingd.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //waitiingArea
            [
                'id' => 8,
                'title' => 'Campus Yard',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 5.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'waitingarea.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //infirmary
            [
                'id' => 9,
                'title' => 'Infirmary',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -9.0,
                'yaw' => -87.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'infarmary.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //activity center
            [
                'id' => 10,
                'title' => 'Activity Center',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 0.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'court.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //building E First Floor Rooms
            [
                'id' => 11,
                'title' => 'Building E Room 101',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -2.0,
                'yaw' => 35.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'e101.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'title' => 'Building E Room 102',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -2.0,
                'yaw' => -177.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'e102.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'title' => 'Building E Room 103',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -2.0,
                'yaw' => 166.0,
                'horizonRoll' => 1.0,
                'horizonPitch'=> 0.0,
                'image' => 'e103.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Ehall 
            [
                'id' => 14,
                'title' => 'Building E Hall',//ehall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 0.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'ehall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'title' => 'Building E Hall',//ehall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -3.0,
                'yaw' => 174.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'ehall1.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'title' => 'Building E Hall',//ehall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -3.0,
                'yaw' => 174.0,
                'horizonRoll' => 5.0,
                'horizonPitch'=> 0.0,
                'image' => 'ehall3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'title' => 'Building E Second Floor Hall',//e2hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => -177.0,
                'horizonRoll' => 5.0,
                'horizonPitch'=> 0.0,
                'image' => 'e2hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'title' => 'Building E Second Floor Hall',//e2hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 10.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'e2hall3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'title' => 'Building E Second Floor Hall',//e2hall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -2.0,
                'yaw' => -169.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'e2hall4.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Building E Rooms Second Floor Rooms
            [
                'id' => 20,
                'title' => 'Building E Room 201',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -9.0,
                'yaw' => -177.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'e201.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'title' => 'Building E Room 202',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -171.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'e202.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'title' => 'Building E Room 203',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -171.0,
                'horizonRoll' => 0.0,
                'horizonPitch'=> 0.0,
                'image' => 'e203.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //building A
            //ahalls
            [
                'id' => 23,
                'title' => 'Building A Hall', //ahall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -21.0,
                'yaw' => 173.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'ahall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a2hall
            [
                'id' => 24,
                'title' => 'Building A Second Floor Hall',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -21.0,
                'yaw' => 173.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a2minihall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'title' => 'Building A Second Floor Hall', //a2hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -12.0,
                'yaw' => 8.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a2hall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a3hall
            [
                'id' => 26,
                'title' => 'Building A Third Floor Hall', //a3hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a3hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'title' => 'Building A Third Floor Hall',//a3hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a3hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a2room
            [
                'id' => 25,
                'title' => 'Building A Room 215',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -13.0,
                'yaw' => 2.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a215.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'title' => 'Building A Room 216',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -17.0,
                'yaw' => 179.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a216.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'title' => 'Building A Room 217',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -13.0,
                'yaw' => -45.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a217.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //a3room
            [
                'id' => 28,
                'title' => 'Building A Room 312',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a312.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'title' => 'Building A Room 313',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'a313.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //bhalls
            [
                'id' => 32,
                'title' => 'Building B Hall',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => 162.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'bhallmid2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 32,
                'title' => 'Building B Hall', //bhall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'bhallmid.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'title' => 'Building B Hall', //bhall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'bhallmid3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b2hall
            [
                'id' => 34,
                'title' => 'Building B Hall', //b2hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -5.0,
                'yaw' => 8.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b2hall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Hall', //b2hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b2hallfac.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b2hallrooms
            [
                'id' => 34,
                'title' => 'Building B Room 206', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -10.0,
                'yaw' => -137.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b206.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Room 205', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => 5.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b205.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Room 204', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -3.0,
                'yaw' => -179.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b204.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Room 203', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -3.0,
                'yaw' => -179.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b203.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b3hall
            [
                'id' => 34,
                'title' => 'Building B Hall', //b3hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b2hall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Hall', //b3hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -176.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b2hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //b3rooms
            [
                'id' => 34,
                'title' => 'Building B Hall Room 306', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -11.0,
                'yaw' => -12.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b306.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Hall Room 304', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 8.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b304.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Hall Room 304', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 8.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b304.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'title' => 'Building B Hall Room 301', 
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => 20.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'b301.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            //challs
            [
                'id' => 34,
                'title' => 'Building C Hall',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => 162.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'chall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //building D Rooms
            [
                'id' => 35,
                'title' => 'Building D Room 101',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => -178.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 1.0,
                'image' => 'd101.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'title' => 'Building D Room 102',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => -178.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 1.0,
                'image' => 'd101.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ]);
    }
}
