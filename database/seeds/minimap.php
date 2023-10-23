<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class minimap extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minimap')->insert([
            'image'=>'mark.png',
            'title'=>'minimap',
            'description'=>'minimap',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
