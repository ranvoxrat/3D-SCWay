<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'profile'=>'mark.png',
            'type'=>'Admin',
            'status'=>'Active',
            'fname'=>'Mark',
            'lname'=>'Feliciano',
            'age'=>'20',
            'gender'=>'Male',
            'address'=>'San Jose Del Monte Bulacan',
            'username' => 'admin',
            'password'=> Hash::make('admin123'),
            'remember_token' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
