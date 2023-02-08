<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Jannatul Ferdaush',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('200554321'),
            'phone' => '01300869499',
        ]);
    }
}
