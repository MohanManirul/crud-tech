<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM users');

        DB::table('users')->insert([
            [
                'name' => 'Md.Khairul Alam',
                'email' => 'khairul@gmail.com',
                'phone' => '01915985300',
                'image' => null,
                'password' => Hash::make(123456),
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);
    }
}
