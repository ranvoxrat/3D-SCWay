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
<<<<<<< HEAD
                'id' => 25,
=======
                'id' => 28,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 26,
=======
                'id' => 29,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 27,
=======
                'id' => 30,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 28,
=======
                'id' => 31,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 29,
=======
                'id' => 32,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 32,
=======
                'id' => 33,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 32,
=======
                'id' => 34,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 33,
=======
                'id' => 35,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
                'title' => 'Building B Hall', //b2hall
=======
                'id' => 36,
                'title' => 'Building B Hall Second Floor', //b2hall
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
                'title' => 'Building B Hall', //b2hall2
=======
                'id' => 37,
                'title' => 'Building B Hall Second Floor', //b2hall2
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 38,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 39,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 40,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 41,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
                'title' => 'Building B Hall', //b3hall
=======
                'id' => 42,
                'title' => 'Building B Hall Third Floor', //b3hall
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
                'title' => 'Building B Hall', //b3hall2
=======
                'id' => 43,
                'title' => 'Building B Hall Third Floor', //b3hall2
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 44,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 34,
=======
                'id' => 45,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
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
=======
                'id' => 46,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
            
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
=======
            //challs
            [
                'id' => 47,
                'title' => 'Building C Hall', //chall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 5.0,
                'horizonRoll' => 1.0,
                'horizonPitch'=> 0.0,
                'image' => 'csright.jpg',
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
<<<<<<< HEAD
            //building D Rooms
            [
                'id' => 35,
=======
            [
                'id' => 48,
                'title' => 'Building C Hall',//chall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 6.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'csleft.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 49,
                'title' => 'Building C Hall',//chall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -1.0,
                'yaw' => 29.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'chall3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c floor 1
            [
                'id' => 50,
                'title' => 'Building C Room 107',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => -159.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c107.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c second floor
            [
                'id' => 51,
                'title' => 'Building C Hall Second Floor',//c2hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => 177.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c2s2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'title' => 'Building C Hall Second Floor',//c2hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => 12.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c2hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 53,
                'title' => 'Building C Hall Second Floor',//c2hall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -2.0,
                'yaw' => -3.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c2hall3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 54,
                'title' => 'Building C Hall Second Floor',//c2hall4
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => 80.0,
                'horizonRoll' => 5.0,
                'horizonPitch'=> 0.0,
                'image' => 'c2hall4pg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c second floor rooms
            [
                'id' => 55,
                'title' => 'Building C Room 207',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => 16.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c207.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 56,
                'title' => 'Building C Room 208',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 10.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c208.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 57,
                'title' => 'Building C Room 209',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -7.0,
                'yaw' => 2.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c209.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 58,
                'title' => 'Building C Room 210',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -9.0,
                'yaw' => 4.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c210.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 59,
                'title' => 'Building C Room 211',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -10.0,
                'yaw' => 172.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c211.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c thirdfloor hall
            [
                'id' => 60,
                'title' => 'Building C Third Floor Hall', //c3hall
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => 179.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3shhall.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 61,
                'title' => 'Building C Third Floor Hall', //c3hall2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -4.0,
                'yaw' => 175.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3shhall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 62,
                'title' => 'Building C Third Floor Hall', //c3hall3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => 0.0,
                'yaw' => -167.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3shhall3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 63,
                'title' => 'Building C Third Floor Hall', //c3hall4
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -1.0,
                'yaw' => 178.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3hall2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 64,
                'title' => 'Building C Third Floor Hall', //c3hall5
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -1.0,
                'yaw' => 6.0,
                'horizonRoll' => 5.0,
                'horizonPitch'=> -2.0,
                'image' => 'c3hall1.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //c3 rooms
            [
                'id' => 65,
                'title' => 'Building C Social Hall',//s1
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -9.0,
                'yaw' => 160.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3sh3.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 66,
                'title' => 'Building C Social Hall',//s2
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -10.0,
                'yaw' => 16.0,
                'horizonRoll' => 1.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3sh2.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 67,
                'title' => 'Building C Social Hall',//s3
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -6.0,
                'yaw' => 173.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c3sh1.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 68,
                'title' => 'Building C Room 309',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => 2.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> -1.0,
                'image' => 'c309.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], 
            [
                'id' => 69,
                'title' => 'Building C Room 308',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => 6.0,
                'horizonRoll' => 4.0,
                'horizonPitch'=> 0.0,
                'image' => 'c308.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 70,
                'title' => 'Building C Room 307',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -14.0,
                'yaw' => 8.0,
                'horizonRoll' => 2.0,
                'horizonPitch'=> 1.0,
                'image' => 'c307.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
            //building D Rooms
            [
                'id' => 71,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
                'id' => 37,
=======
                'id' => 72,
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
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
<<<<<<< HEAD
=======
            [
                'id' => 73,
                'title' => 'Building D Room 201',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -1.0,
                'horizonRoll' => 3.0,
                'horizonPitch'=> 1.0,
                'image' => 'd201.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 74,
                'title' => 'Building D Room 202',
                'type' => 'equirectangular',
                'hfov' => 120.00,
                'pitch' => -8.0,
                'yaw' => -1.0,
                'horizonRoll' => 1.0,
                'horizonPitch'=> 1.0,
                'image' => 'd101.jpg',
                'status' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
            
        ]);
    }
}
